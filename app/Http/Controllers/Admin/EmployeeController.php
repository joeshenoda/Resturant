<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Models\Employee ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $employees = Employee::all();
        $filter = false;
        $national_id = '';
        $startDate = '';
        $endDate = '';
        return view('admin.employee.index')->with('filter', $filter)->with('employees', $employees)->with('national_id', $national_id)->with('startDate',$startDate)->with('endDate',$endDate);
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.employee.create');
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
            'name' => 'required',
            'email' => 'required|unique:employees',
            'code' => 'required|numeric|digits:4|unique:employees',
            'phone'=>'numeric|required',
            'password' => 'required|confirmed',
            'address' => 'required',


        ]);

        $employee  = Employee::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'code' => $request->input('code'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),

        ]);

        return redirect()->route('admin.employee.show',$employee )->with('success', __('Creating has Done successfully') .':'. $employee ->name);

    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(Employee $employee)
    {
        return view('admin.employee.show')->with('employee', $employee );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Employee $employee)
    {

        return view('admin.employee.create', $employee )->with('employee', $employee );
    }


    public function editemployee ()
    {

        return view('admin.employee.edit');
    }

    public function showedit($employee )
    {
        $employee  = Employee::findorfail($employee );
        return view('admin.employee.edit')->with('employee',$employee );
    }

    public function deleteemployee ()
    {

        return view('admin.employee.delete');
    }
    public function destroyemployee (Request $request)
    {

        $employee =$request->input('employee _id');

        if(isset($employee )){


            $employee  = Employee::findorfail($employee );

            $employee  -> delete();


            return view('admin.employee.delete')->With('error', __('Delete has Done successfully').':'.$employee ->name);
        }
        else{
            return view('admin.employee.delete');
        }


    }


    public function getemployee (Request $request)
    {
        $employee =$request->input('employee_id');

        if(isset($employee )) {
            $employee  = Employee::findorfail($employee );

            return view('admin.employee.edit')->with('employee', $employee );
        }
        else{
            return view('admin.employee.edit');
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
    public function update(Request $request,Employee $employee)
    {

        //  $employee =$request->input('employee ');

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:employees,id,' . $employee->id,
            'phone'=>'numeric|required',
            'code' => 'required|numeric|digits:4|unique:employees,id,' . $employee->id,
            'password' => 'confirmed|nullable',
            'address' => 'required',




        ]);

        if ($request->input('password')){

            $employee  = Employee::updateorcreate(
                ['id' => $employee ->id],
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'code' => $request->input('code'),

                    'address' => $request->input('address'),
                    'phone' => $request->input('phone'),

                    'password' => Hash::make($request->input('password')),

                ]
            );

    }

    else{

        $employee  = Employee::updateorcreate(
            ['id' => $employee ->id],
            [
                'name' => $request->input('name'),
                'code' => $request->input('code'),

                'address' => $request->input('address'),
                'phone' => $request->input('phone'),


            ]
        );
}




        return redirect()->route('admin.employee.show',$employee )->with('success', __('Editing has Done successfully') .':'. $employee->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Employee $employee)
    {

        $employee  = Employee::findorfail($employee ->id);

        $employee  -> delete();

        return redirect()->route('admin.employee.index')->With('error', __('Delete has Done successfully').':'.$employee ->name);
    }
    public function destroy_all(Request $request)
    {

        if($request->input('item')){
            foreach ($request->input('item') as $item){
                Employee::destroy(Employee::findorfail($item)->id);

            }
            return redirect()->route('admin.employee.index')->with('error', __('Delete has Done successfully'));
        }
        else
            return redirect()->route('admin.employee index')->with('error', __('Your list is empty'));


    }


}
