<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stripe\Stripe;
use App\Models\accounts;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \Stripe\Exception\ApiErrorException
     */
    public function index()
    {
      return view('front.home');
    }
    public function services()
    {
        return view('front.services');
    }


    public function profile()
    {
        $user=Auth::guard('web')->user();
        return view('front.profile')->with('user',$user);
    }


    public function update(Request $request)
    {
        $user=Auth::guard('web')->user();
        //  $user=$request->input('user');

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,id,'.$user->id,
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




        return redirect()->route('profile',$user)->with('success', __('Editing has Done successfully') .':'. $user->name);
    }





}
