<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function all_user(){
        $users = User::all();
        return view('backend.user.all_user' , compact('users'));
    }

    public function delete($id){
        $users = User::find($id);
        $users->delete();

        return redirect()->back();

    }
}
