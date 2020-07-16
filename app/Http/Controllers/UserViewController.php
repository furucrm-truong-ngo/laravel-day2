<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class UserViewController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('profile',['user'=>$user]);
        }
}
