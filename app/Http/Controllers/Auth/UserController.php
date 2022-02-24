<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Redirect;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
class UserController extends Controller
{
    public function register(Request $request){
      if($request->id){
      return view('auth.register',['id'=>$request->id]);
      }
      else {
        return view('auth.register',['id'=>null]);
      }

    }

    public function register_user(Request $request){
      $validatedData = $request->validate([
        'email' => 'required|unique:users|max:255|email',
        'password' => 'required|min:6',
    ]);

if($request->id != ''){
  $follow = User::query()->where('code',$request->id)->first();
    $user = User::create([
         'email'    => $request->email,
         'password' => $request->password,
         'username'=>$request->name,
         'follow_id'=>$follow->id,
         'code'=>random_int(100000, 999999)
       ]);
}
else {
    $user = User::create([
         'email'    => $request->email,
         'password' => $request->password,
         'username'=>$request->name
     ]);
}
  //
  //   $user = User::create([
  //        'email'    => $request->email,
  //        'password' => $request->password,
  //        'username'=>$request->name
  //    ]);
  // //      $user->sendEmailVerificationNotification();
  //
  return redirect()->route('home');
    }
    public  function Login(Request $request)
    {
      $auth = Auth::user();

      return view('auth.login',['auth'=>$auth,'page'=>'none']);

    }
    public function login_response()
    {
      $credentials = request(['email', 'password']);

      if (! $token = auth()->attempt($credentials)) {
        return Redirect::back()->withErrors(['message'=>'wrong email or password']);
      }else {
        return redirect()->route('home');
      }




    }

    public function logout(){
      Auth::logout();

    return redirect('/');
    }

}
