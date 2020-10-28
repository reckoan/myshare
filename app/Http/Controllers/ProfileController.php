<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function password()
    {
        # code...
    }

    public function passwordSave(Request $request)
    {
        $this->validate($request, [
            'old_password' => ['required'],
            'new_password' => ['required', 'same:conf_password', 'min:6'],
            'conf_password' => ['required'],
        ]);


         
        if (Hash::make($request->old_password) != auth()->user()->password) {
            
             return redirect()->back()->with('error', 'Old Password Do not Match');
        }
        
        

    }

    public function save()
    {
        # code...
    }
}
