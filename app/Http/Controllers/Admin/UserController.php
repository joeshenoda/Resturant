<?php

namespace App\Http\Controllers\Admin;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $users = User::all();
        $filter = false;
        $national_id = '';
        $startDate = '';
        $endDate = '';
        return view('admin.user.index')->with('filter', $filter)->with('users', $users)->with('national_id', $national_id)->with('startDate',$startDate)->with('endDate',$endDate);
    }



    public function orders($user)
    {

        $orders = Order::where('user_id',$user)->get();
        $current = date('m/d/Y', strtotime(today()));
        foreach ($orders as $order){
            $finish= date('m/d/Y', strtotime($order->start_date.' + '.$order->membership->period.' days'));
            if(strtotime($current) > strtotime($finish) && $order->membership->end==1){

                $order->verified=3;
                $order->save();
            }


        }
        $filter = false;

        return view('admin.user.orders.index')->with('user',$user)->with('filter', $filter)->with('orders', $orders)->with('verified', '10');
    }


    public function getuserorders(Request $request,$user)
    {
        $filter = false;
        $verified = ($request->input('verified') != null) ? $request->input('verified') : '10';
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');




        $orders = Order::where('user_id',$user)->latest();

        if ($verified != 10) {
            $orders = $orders->where('verified', $verified);
        }




        if (isset($startDate)) {
            $orders = $orders -> whereDate('created_at', '>=', $startDate);
            $filter = true;
        }

        if (isset($endDate)) {
            $orders = $orders -> whereDate('created_at', '<=', $endDate);
            $filter = true;
        }

        $orders = $orders->get();


        return view('admin.user.orders.index')->with('orders', $orders)->with('user',$user)->with('verified', $verified)->with('filter', $filter)->with('startDate', $startDate)->with('endDate',$endDate);
    }


    public function getusers(Request $request)
    {

        $filter = false;

        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        $national_id = $request->input('national_id');

        $users = User::latest();


        if (isset($national_id) && $national_id != "") {
            $users = $users -> where('national_id', $national_id);
            $filter = true;
        }


        if (isset($startDate)) {
            $users = $users -> whereDate('created_at', '>=', $startDate);
            $filter = true;
        }

        if (isset($endDate)) {
            $users = $users->whereDate('created_at', '<=', $endDate);
            $filter = true;
        }

        $users = $users->get();


        return view('admin.user.index')->with('users', $users)->with('filter', $filter)->with('national_id', $national_id)->with('startDate',$startDate)->with('endDate',$endDate);
    }









    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'email' => 'required|unique:users',

            'phone'=>'numeric|required',
            'password' => 'required|min:8|confirmed',


        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),

            'address' => $request->input('address'),
            'phone' => $request->input('phone'),

            'password' => Hash::make($request->input('password')),

        ]);

        return redirect()->route('admin.user.show',$user)->with('success', __('Creating has Done successfully') .':'. $user->name);

    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(user $user)
    {
        return view('admin.user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(user $user)
    {

        return view('admin.user.create', $user)->with('user', $user);
    }


    public function edituser()
    {

        return view('admin.user.edit');
    }

    public function showedit($user)
    {
        $user = User::findorfail($user);
        return view('admin.user.edit')->with('user',$user);
    }

    public function deleteuser()
    {

        return view('admin.user.delete');
    }
    public function destroyuser(Request $request)
    {

        $user=$request->input('user_id');

        if(isset($user)){


            $user = User::findorfail($user);

            $user -> delete();


            return view('admin.user.delete')->With('error', __('Delete has Done successfully').':'.$user->name);
        }
        else{
            return view('admin.user.delete');
        }


    }


    public function getuser(Request $request)
    {
        $user=$request->input('user_id');

        if(isset($user)) {
            $user = User::findorfail($user);

            return view('admin.user.edit')->with('user', $user);
        }
        else{
            return view('admin.user.edit');
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
    public function update(Request $request,User $user)
    {

        //  $user=$request->input('user');

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,id,' . $user->id,
            'phone'=>'numeric|required',

            'password' => 'confirmed|min:8|nullable',





        ]);

        if ($request->input('password')){

            $user = User::updateorcreate(
                ['id' => $user->id],
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),

                    'address' => $request->input('address'),
                    'phone' => $request->input('phone'),

                    'password' => Hash::make($request->input('password')),

                ]
            );

    }

    else{

        $user = User::updateorcreate(
            ['id' => $user->id],
            [
                'name' => $request->input('name'),

                'address' => $request->input('address'),
                'phone' => $request->input('phone'),


            ]
        );
}




        return redirect()->route('admin.user.show',$user)->with('success', __('Editing has Done successfully') .':'. $user->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(user $user)
    {

        $user = User::findorfail($user->id);

        $user -> delete();

        return redirect()->route('admin.user.index')->With('error', __('Delete has Done successfully').':'.$user->name);
    }
    public function destroy_all(Request $request)
    {

        if($request->input('item')){
            foreach ($request->input('item') as $item){
                User::destroy(User::findorfail($item)->id);

            }
            return redirect()->route('admin.user.index')->with('error', __('Delete has Done successfully'));
        }
        else
            return redirect()->route('admin.user.index')->with('error', __('Your list is empty'));


    }


}
