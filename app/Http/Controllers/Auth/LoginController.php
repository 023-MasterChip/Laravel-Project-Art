<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function index(){
        // Pass to view
        return view('login');
      }
      public function registration(){
        // Pass to view
        return view('register');
      }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $artData['data']=DB::table('arts')->orderBy('id', 'asc')->get();   
            $userData['data']=DB::table('users')->orderBy('id', 'asc')->get();        
            return view('welcome')
            ->with("artData",$artData)
            ->with("userData",$userData);
        }

        return redirect('login')->with('error', 'Opps! You have entered invalid credentials');
    }
    public function welcome()
    {
            $artData['data']=DB::table('arts')->orderBy('id', 'asc')->get();   
            $userData['data']=DB::table('users')->orderBy('id', 'asc')->get();        
            return view('welcome')
            ->with("artData",$artData)
            ->with("userData",$userData);
    }

    public function postRegistration(Request $request)
    {  
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        $artData['data']=DB::table('arts')->orderBy('id', 'asc')->get();   
        $userData['data']=DB::table('users')->orderBy('id', 'asc')->get();        
        return view('welcome')
        ->with("artData",$artData)
        ->with("userData",$userData);
    }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'image' => NULL
      ]);
    }

    public function logout() {
      Auth::logout();

      return redirect('login');
    }

}
