<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateUserById(Request $request)
    {
        DB::table('users')
            ->where('id', 3)
            ->update(['title' => "Updated Title"]);
    }
}
