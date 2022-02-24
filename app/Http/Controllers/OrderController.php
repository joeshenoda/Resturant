<?php

namespace App\Http\Controllers;



use App\Models\Order;
use App\Models\Tables;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $orders = Order::where('user_id',Auth::guard('web')->user()->id)->orderBy('created_at', 'DESC')->get();

        return view('front.order.index')->with('orders', $orders);
    }





    public function store(Request $request)
    {




        $table=Tables::findorfail($request->input('table_id'));


        $this->validate($request, [

            'date' => 'required|date',
            'end_time' => 'after_or_equal:start_time',


        ]);


        $order = Order::create([
            'user_id' => Auth::guard('web')->user()->id,
            'table_id' => $request->input('table_id'),
            'date' => $request->input('date'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'status' => 0,




        ]);


        return redirect()->route('order.show',$order)->with('success', __('Your reservation has been completed successfully') .':'. $order->table->code);

    }





    public function show(Order $order)
    {
        return view('front.order.show')->with('order', $order);
    }


}
