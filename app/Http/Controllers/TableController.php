<?php

namespace App\Http\Controllers;



use App\Models\Order;
use App\Models\Tables;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $tables = Tables::orderBy('created_at', 'DESC')->get();

        return view('front.table.index')->with('tables', $tables);
    }




    public function search(Request  $request)
    {



        $this->validate($request, [

            'end_time' => 'after_or_equal:start_time',
          //  'end_time' => 'date_format:23:0:59|after:start_time',
        ]);

        if(($request->input('end_time') > "12:00" && $request->input('end_time') < "23:59" && $request->input('start_time') > "12:00" && $request->input('start_time') < "23:59")){


        $chairs=intval($request->input('chairs'));
        $date=$request->input('date');
        $start_time=$request->input('start_time');
        $end_time=$request->input('end_time');


        Session::put('chairs', $chairs);
        Session::put('date', $date);
        Session::put('start_time', $start_time);
        Session::put('end_time', $end_time);


        $tables = Tables::latest();

      //  $tables = $tables -> where('id',function ($q) use ($date,$start_time,$end_time){$q->select('table_id')->from('orders')->whereDate('date', '!=', $date)->whereTime('start_time','>',$start_time)->whereTime('end_time','>',$end_time)->first();}  );


        $tables = $tables -> whereNotIn('id',function ($q) use ($date,$start_time,$end_time){$q->select('table_id')->from('orders')->whereDate('date', '=', $date)->whereTime('start_time','<=',$start_time)->whereTime('end_time','>=',$end_time)->get();}  );


          //     dd($tables);

        $tables= $tables->where('chairs','=' ,$chairs)->orWhere('chairs',$chairs+1)->orderBy('created_at', 'DESC')->get();



        return view('front.table.index')->with('tables', $tables)->with('date',$date)->with('chairs',$chairs)->with('start_time',$start_time)->with('end_time',$end_time);

        }
        else{
            return redirect()->back() ->with('alert', 'Updated!')->with('error',  __('The restaurant opens every day at 12 noon and closes at 11:59 pm.'));
        }
        //return redirect()->route('tables',['tables' => $tables] );

    }








    public function show(Tables $table)
    {
        if(session('date')!=null && session('start_time')!=null && session('end_time')!=null) {

            return view('front.table.show')->with('table', $table);
        }
        else{
            return redirect()->back() ->with('alert', 'Updated!')->with('error',  __('Please fill date , start time and end time'));
        }
    }


}
