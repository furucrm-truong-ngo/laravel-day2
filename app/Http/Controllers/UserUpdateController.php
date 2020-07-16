<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class UserUpdateController extends Controller
{
    public function show($id)
    {
        $user = Auth::user();
        return view('user_update', ['user' => $user]);
    }
    public function edit(Request $request, $username)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $zipcode = $request->input('zipcode');
        DB::update('update users set name = ?,address=?,zipcode=? where username = ?', [$name, $address, $zipcode, $username]);
        echo "Record updated successfully. Automatically redirect in 3s...
        ";
        header('Refresh: 3; /profile');
    }
}
