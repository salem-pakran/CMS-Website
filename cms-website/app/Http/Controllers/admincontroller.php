<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\admin;
use App\Models\User;
//use Illuminate\Foundation\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Events\Authenticated;
use Session;

class admincontroller extends Controller
{
    public function index()
    {

        return view('admin/login');
    }

    public function mekellogin(Request $request)
    {

        $validator = Validator::make($request->all(), [



            'password' => 'required',
            'username' => 'required',
        ]);

        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();
        }

       /* $date = array(
            'username' => $request->username,
            'password' => $request->password,
        );
        if (Auth::guard('admin')->attempt($date)) {
            return redirect('admin/dashbord');

        } else {
            return back()->withErrors(['message' => 'invlidv email or password']);

        }
*/
        $admin = User::where("name",$request->username)
                      ->where('password',$request->password)->get()->toArray();
                      if($admin){

                        return view('admin/dashbord');
                      }else{

                        echo "NO";
                      }
    }
    public function dashbord(){
        return view('admin/dashbord');
    }
}
