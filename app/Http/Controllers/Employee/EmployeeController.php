<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\employeeDatatable;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    /*  public function index(employeeDatatable $employee)
      {

          return $employee->render('dashboard.employee.index');

      }*/

    public function index (){


        if(Auth::guard('employee')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        $employees = Employee::all();
         return view('employee.employee.index')->with('employees', $employees);

    }
    public function profile(Request $request,  $employee)
    {
        $employee=Employee::findorfail($employee);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:employees,id,' . $employee->id,
            'phone'=>'numeric|required',
            'national_id' => 'required|numeric|unique:employees,id,' . $employee->id,
            'password' => 'confirmed|nullable',
            'address' => 'required',
        ]);



        if ($request->input('password'))
            $employee = Employee::updateorcreate(
                ['id' => $employee->id],
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'national_id' => $request->input('national_id'),

                    'address' => $request->input('address'),
                    'phone' => $request->input('phone'),

                    'password' => Hash::make($request->input('password')),
                ]
            );
        else
            $employee = Employee::updateorcreate(
                ['id' => $employee->id],
                [
                    'name' => $request->input('name'),
                    'national_id' => $request->input('national_id'),

                    'address' => $request->input('address'),
                    'phone' => $request->input('phone'),

                ]
            );

        return redirect()->route('employee.profile')->with('success', __('Editing has Done successfully') .':'. $employee->name);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        if(Auth::guard('employee')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        return view('employee.employee.create');
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

        if(Auth::guard('employee')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:employees',
            'password' => 'required|confirmed',
        ]);

        $employee = Employee::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('employee.employee.show', $employee)->with('success', __('Creating has Done successfully') .':'. $employee->name);
    }

    /**
     * Display the specified resource.
     *
     * @param employee $employee
     * @return employee
     */
    public function show(employee $employee)
    {
        if(Auth::guard('employee')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        return view('employee.employee.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param employee $employee
     * @return void
     */
    public function edit(employee $employee)
    {
        if(Auth::guard('employee')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        return view('employee.employee.create')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param employee $employee
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, employee $employee)
    {
        if(Auth::guard('employee')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:employees,id,'.$employee->id,
            'password' => 'confirmed|nullable',
        ]);

        if ($request->input('password'))
            $employee = Employee::updateorcreate(
                ['id' => $employee->id],
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                ]
            );
        else
            $employee = Employee::updateorcreate(
                ['id' => $employee->id],
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                ]
            );

        return redirect()->route('employee.employee.show', $employee)->with('success', __('Editing has Done successfully') .':'. $employee->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param employee $employee
     * @return void
     */
    public function destroy(employee $employee)
    {
        if(Auth::guard('employee')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        Employee::destroy($employee->id);
        return redirect()->route('employee.employee.index')->with('error', __('Delete has Done successfully'));
    }
    public function destroy_all(Request $request)
    {

        if(Auth::guard('employee')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
    /*    return request();
        $id=$request->input('item_id');
        $employee=employee::findorfail($id);
        employee::destroy($employee->id);
        return redirect()->route('dashboard.employee.index')->with('error', 'تم حذف المدير '.$employee->name);
    */

  /*  dd($request->input('item'));
    if(is_array(request('item')))
    {
       employee::destroy(requset('item'));
    }
    else{
        employee::find(request('item'))->delete();
    }*/
    if($request->input('item')){
        foreach ($request->input('item') as $item){
            Employee::destroy(Employee::findorfail($item)->id);
        }
        return redirect()->route('employee.employee.index')->with('error',  __('Delete has Done successfully'));
    }
    else
        return redirect()->route('employee.employee.index')->with('error', __('Your list is empty'));


    }


}
