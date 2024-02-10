<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SignInController extends Controller
{


    // code pada bagian ini mungkin tidak clean, dikarenakan tujuannya adalah belajar menggunakan helper atau syntax yang baru saya pelajari

    public function signin(Request $request)
    {
        // message for errors
        $message = [
            'required' => "Kolom :attribute harus diisi",
            'email' => "Format :attribute tidak valid"
        ];

        // validation data 
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required'
        ], $message);

        // redirect ke halaman utama hanya jika berhasil melewati validasi sekeligus set cookie
        if ($validator->passes()) {
            // buat laporan ke log file
            Log::info(
                "IP " . $request->ip() . " - berusaha masuk dengan email: " . $request->input('email')
            );

            // otentikasi
            $email = $request->input('email');
            $password = $request->input('password');
            $user = DB::table('users')->where('email', $email)->first();

            if ($user && Hash::check($request->input('password'), $user->password)) {

                // buat laporan ke log file bahwa user berhasil masuk
                Log::info(
                    "IP " . $request->ip() . " - berhasil masuk dengan email: " . $request->input('email')
                );

                // set session 
                session()->put('key', $email);
                // redirect kehalaman beranda dan tambahkan cookie

                return redirect('/beranda')->cookie('IsMember', $request->input('email'), 180);
            } else {

                Log::info(
                    "IP " . $request->ip() . " - gagal masuk menggunakan email: " . $request->input('email')
                );

                return redirect('/signin')->withErrors([
                    'error' => "Email atau password salah"
                ]);
            }
        } else {


            Log::info(
                "IP " . $request->ip() . " - gagal masuk menggunakan email: " . $request->input('email')
            );
            return redirect('/signin')->withErrors($validator->errors());
        }
    }
}
