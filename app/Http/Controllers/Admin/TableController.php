<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Models\Employee;
use App\Models\Tables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $tables = Tables::all();

        return view('admin.table.index')->with('tables', $tables);
    }










    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:tables',
            'describe' => 'required|',
            'describe_ar' => 'required',
            'chairs' => 'required|numeric|min:1|max:12',



        ]);

        $table = Tables::create([
            'code' => $request->input('code'),
            'describe' => $request->input('describe'),
            'describe_ar' => $request->input('describe_ar'),
            'chairs' => $request->input('chairs'),

        ]);

        return redirect()->route('admin.table.show',$table)->with('success', __('Creating has Done successfully') .':'. $table->code);

    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(Tables $table)
    {
        return view('admin.table.show')->with('table', $table);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Tables $table)
    {

        return view('admin.table.create', $table)->with('table', $table);
    }


    public function edittable()
    {

        return view('admin.table.edit');
    }

    public function showedit($table)
    {
        $table = Tables::findorfail($table);
        return view('admin.table.edit')->with('table',$table);
    }

    public function deletetable()
    {

        return view('admin.table.delete');
    }
    public function destroytable(Request $request)
    {

        $table=$request->input('table_id');

        if(isset($table)){


            $table = Tables::findorfail($table);

            $table -> delete();


            return view('admin.table.delete')->With('error', __('Delete has Done successfully').':'.$table->name);
        }
        else{
            return view('admin.table.delete');
        }


    }


    public function gettable(Request $request)
    {
        $table=$request->input('table_id');

        if(isset($table)) {
            $table = Tables::findorfail($table);

            return view('admin.table.edit')->with('table', $table);
        }
        else{
            return view('admin.table.edit');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Category $category
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request,Tables $table)
    {

        //  $table=$request->input('table');

        $this->validate($request, [
            'code' => 'required|unique:tables,id,' . $table->id,
            'describe' => 'required|',
            'describe_ar' => 'required',
            'chairs' => 'required|numeric|min:1|max:12',




        ]);



            $table = Tables::updateorcreate(
                ['id' => $table->id],
                [
                    'code' => $request->input('code'),
                    'describe' => $request->input('describe'),
                    'describe_ar' => $request->input('describe_ar'),
                    'chairs' => $request->input('chairs'),

                ]
            );








        return redirect()->route('admin.table.show',$table)->with('success', __('Editing has Done successfully') .':'. $table->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Tables $table)
    {

        $table = Tables::findorfail($table->id);

        $table -> delete();

        return redirect()->route('admin.table.index')->With('error', __('Delete has Done successfully').':'.$table->name);
    }
    public function destroy_all(Request $request)
    {

        if($request->input('item')){
            foreach ($request->input('item') as $item){
                Tables::destroy(Tables::findorfail($item)->id);

            }
            return redirect()->route('admin.table.index')->with('error', __('Delete has Done successfully'));
        }
        else
            return redirect()->route('admin.table.index')->with('error', __('Your list is empty'));


    }


}
