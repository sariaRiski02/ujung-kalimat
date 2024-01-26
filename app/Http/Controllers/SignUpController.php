<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SignUpController extends Controller
{

    public function signup(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $rules = [
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->passes()) {
            return redirect('/signin');
        }
        return redirect()->route('signup', [
            'error' => 'daftar gagal'
        ]);
    }
}
