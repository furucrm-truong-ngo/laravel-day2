<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\User;

class UserUpdateController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('user_update', ['user' => $user]);
    }
    public function edit(Request $request, $username)
    {
        $user = User::where('username', $username)->update([
            'name' => $request->input('name'),
            'zipcode' => $request->input('zipcode'),
            'address' => $request->input('address')
        ]);
        echo "Record updated successfully. Automatically redirect in 3s...
        ";
        header('Refresh: 3; /profile');
    }
}
