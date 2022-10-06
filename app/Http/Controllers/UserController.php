<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateNameById(Request $request)
    {
        $data = $request->all();
        $name = $data['name'];
        $id = Auth::user()->id;
        DB::table('users')->where('id', $id)->update(['name' => $name]);
        return redirect()->back()->with('message', 'Name Updated Successfully.');
    }

    public function updateEmailById(Request $request)
    {
        $data = $request->all();
        $email = $data['email'];
        $id = Auth::user()->id;
        DB::table('users')->where('id', $id)->update(['email' => $email]);
        return redirect()->back()->with('message', 'Email Updated Successfully.');
    }

    public function updateImgById(Request $request)
    {
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/upload',$filename);
            $id = Auth::user()->id;

            DB::table('users')->where('id', $id)->update(['image' => $filename]);
            return redirect()->back()->with('message', 'Profile Picture Updated');
        }
        else{
            return redirect()->back()->with('error', 'Profile Picture not Updated');
        }
    }

    public function deleteImgById()
    {
        $id = Auth::user()->id;
        DB::table('users')->where('id', $id)->update(['image' => NULL]);
        return redirect()->back()->with('message', 'Profile Picture Removed.');
    }
}
