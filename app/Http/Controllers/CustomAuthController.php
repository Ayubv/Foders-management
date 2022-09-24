<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;


class CustomAuthController extends Controller
{

    public function index()
    {
        dd("Runju Raton");
        return view('auth.login');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
       
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
       

  
        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name'      => 'required',
            'role_type' => 'required',
            'mobile'    => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:4',
            'tarik'     => 'required',
            'division'  => 'required',
            'district'  => 'required',
            'upazela'   => 'required',
            'area_point'=> 'required',
            'status'    => 'required'
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'name'      => $data['name'],
        'role_type' => $data['role_type'],
        'mobile'    => $data['mobile'],
        'email'     => $data['email'],
        'password'  =>Hash::make($data['password']),
        'tarik'     => $data['tarik'],
        'division'  => $data['division'],
        'district'  => $data['district'],
        'upazela'   => $data['upazela'],
        'area_point'=> $data['area_point'],
        'status'    =>0,
       
      ]);
    }    
    

    public function dashboard()
    {
        if(Auth::user()->role_type =='admin' && Auth::user()->status==1){
            return view('dashboard');
            //return view('plaindashboard');
        }
        if(Auth::user()->role_type =='user' && Auth::user()->status==1){
            //return view('plaindashboard');
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    //users profile

    public function profile()
    {
        
        return view('profiles');
    }

    public function approveFile()
    {
       return view('approves.index');
    }
//users

public function showUser()
{

    $users = User::all();
    return view('users.index',compact('users'));
    
}
public function changeStatus($status,$id)
{

    $user=User::where('id',$id)->first();
    $user->status = !$status;
    $user->save();
    return response()->json(['success'=>true]);

   
}

    
}