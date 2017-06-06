<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\brand;
use App\product;
use Session;
class UsersController extends Controller
{


    public function getWelcome()
    {
      $brands=brand::all();
      $features=product::take(5)->orderBy('created_at','DESC')->get();
      return view('welcome',compact('brands','features'));
    }



    public function ViewRegisterForm()
    {

      return view('onlinestore.register');
    }
    public function RegisterStore(Request $request)
    {
      $this->RegisterValidator($request);
        $userTB = new User;
        $userTB->fname = $request->fname;
        $userTB->lname = $request->lname;
        $userTB->email = $request->email;
        $userTB->password = bcrypt($request->password);
        $userTB->save();

        $credentials = array('email' => $request->email,'password' => $request->password );
        if (Auth::attempt($credentials)) {
          return redirect('welcome');
        }

    }

    public function RegisterValidator($request)
    {
       $this->validate($request,[
         'fname' => 'required|max:15',
         'lname' => 'required|max:15',
         'email' => 'required|unique:users|max:191',
         'password' => 'required|confirmed',
       ]);
    }

    public function Logout()
    {
      Auth::logout();
      return redirect('/welcome');
    }

    public function LogIn(Request $request)
    {
      $credentials = array('email' => $request->email,'password' => $request->password );
      if (Auth::attempt($credentials)) {
          return redirect('/welcome');
      }else
      {
        Session::flash('error-login','Incorrect email or password');
        return redirect('/welcome');
      }
    }
}
