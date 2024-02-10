<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SignoutController extends Controller
{
    public function signout(Request $request)
    {


        Cookie::forget('IsMember');
        session()->flush();
        // Cookie::queue(Cookie::forget('key'))
        return redirect('/beranda');
    }
}
