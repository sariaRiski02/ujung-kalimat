<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function author(Request $request)
    {
        $data = user::all();
        return view('author.index', ['data' => $data]);
    }
}
