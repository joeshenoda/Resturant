<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    /*  public function index(AdminDatatable $admin)
      {

          return $admin->render('dashboard.admin.index');

      }*/

    public function index (){


        if(Auth::guard('admin')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        $admins = Admin::all();
         return view('admin.admin.index')->with('admins', $admins);

    }
    public function profile(Request $request,  $admin)
    {
        $admin=Admin::findorfail($admin);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:admins,id,'.$admin->id,
            'password' => 'confirmed|nullable',
        ]);



        if ($request->input('password'))
            $admin = Admin::updateorcreate(
                ['id' => $admin->id],
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                ]
            );
        else
            $admin = Admin::updateorcreate(
                ['id' => $admin->id],
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                ]
            );

        return redirect()->route('admin.profile')->with('success', __('Editing has Done successfully') .':'. $admin->name);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        if(Auth::guard('admin')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        return view('admin.admin.create');
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

        if(Auth::guard('admin')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:admins',
            'password' => 'required|confirmed',
        ]);

        $admin = Admin::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('admin.admin.show', $admin)->with('success', __('Creating has Done successfully') .':'. $admin->name);
    }

    /**
     * Display the specified resource.
     *
     * @param Admin $admin
     * @return Admin
     */
    public function show(Admin $admin)
    {
        if(Auth::guard('admin')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        return view('admin.admin.show')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Admin $admin
     * @return void
     */
    public function edit(Admin $admin)
    {
        if(Auth::guard('admin')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        return view('admin.admin.create')->with('admin', $admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Admin $admin
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, Admin $admin)
    {
        if(Auth::guard('admin')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:admins,id,'.$admin->id,
            'password' => 'confirmed|nullable',
        ]);

        if ($request->input('password'))
            $admin = Admin::updateorcreate(
                ['id' => $admin->id],
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                ]
            );
        else
            $admin = Admin::updateorcreate(
                ['id' => $admin->id],
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                ]
            );

        return redirect()->route('admin.admin.show', $admin)->with('success', __('Editing has Done successfully') .':'. $admin->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Admin $admin
     * @return void
     */
    public function destroy(Admin $admin)
    {
        if(Auth::guard('admin')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
        Admin::destroy($admin->id);
        return redirect()->route('admin.admin.index')->with('error', __('Delete has Done successfully'));
    }
    public function destroy_all(Request $request)
    {

        if(Auth::guard('admin')->user()->power != 100) {
            return redirect()->back() ->with('alert', 'Updated!')->with('warning', 'Invalid Link');

        }
    /*    return request();
        $id=$request->input('item_id');
        $admin=Admin::findorfail($id);
        Admin::destroy($admin->id);
        return redirect()->route('dashboard.admin.index')->with('error', 'تم حذف المدير '.$admin->name);
    */

  /*  dd($request->input('item'));
    if(is_array(request('item')))
    {
       Admin::destroy(requset('item'));
    }
    else{
        Admin::find(request('item'))->delete();
    }*/
    if($request->input('item')){
        foreach ($request->input('item') as $item){
            Admin::destroy(Admin::findorfail($item)->id);
        }
        return redirect()->route('admin.admin.index')->with('error',  __('Delete has Done successfully'));
    }
    else
        return redirect()->route('admin.admin.index')->with('error', __('Your list is empty'));


    }


}
