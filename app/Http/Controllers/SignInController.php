<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SignInController extends Controller
{
    public function signin(Request $request)
    {

        // validation data 
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // redirect ke halaman utama hanya jika berhasil melewati validasi sekeligus set cookie
        try {

            $validator->validate();
            $hasil = DB::select(
                'select password from users where email = :email',
                [
                    'email' => $request->input('email')
                ]
            );



            // return redirect()->route('home');
            if ($hasil[0]->password == $request->input('password')) {

                // set session
                session()->put('key', $request->input('email'));
                // redirect ke beranda
                return response()->redirectToRoute('home')->cookie('IsMember', $request->input('email'), 1000);
            } else {
                return redirect()->route('signin')->with('info', 'gagal');
            }

            // buat laporan ke log file
            Log::info($request->input('email') . ' ' . "login");
        } catch (ValidationException $exeception) {
            // menangkap error
            $message = $exeception->validator->errors();

            // buat laporan ke log file
            Log::info($message->toJson(JSON_PRETTY_PRINT));

            return redirect()->route('signin')->withErrors($message)->withInput();
        }
    }
}
