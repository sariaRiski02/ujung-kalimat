<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignoutController extends Controller
{
    public function signout(Request $request)
    {
        $id = $request->input('id_signout');
    }
}
