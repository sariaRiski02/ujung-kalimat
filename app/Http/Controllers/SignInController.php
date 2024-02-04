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

            if ($user && $password == $user->password) {
                // set email
                session()->put('key', $email);
                return redirect('/beranda')->cookie('IsMember', $request->input('email'), 180);
            } else {
                return redirect('/signin')->withErrors([
                    'error' => "Email atau password tidak ditemukan"
                ]);
            }
        } else {


            return redirect('/signin')->withErrors($validator->errors());
        }

        //     try {
        //         $hasil = DB::select(
        //             'select password from users where email = :email',
        //             [
        //                 'email' => $request->input('email')
        //             ]
        //         );

        //         if (count($hasil)) {

        //             if (Hash::check($request->input('password'), $hasil[0]->password)) {

        //                 // set session
        //                 session()->put('key', $request->input('email'));
        //                 // redirect ke beranda
        //                 return response()->redirectToRoute('home')->cookie('IsMember', $request->input('email'), 1000);
        //             } else {
        //                 return redirect()->route('signin')->with('info', 'Email atau Password salah')->withInput();
        //             }
        //         }
        //         return redirect()->route('signin')->with('info', 'Email atau Password salah')->withInput();
        //     } catch (ValidationException $exeception) {
        //         // menangkap error
        //         $message = $exeception->validator->errors();

        //         // buat laporan ke log file
        //         Log::info($message->toJson(JSON_PRETTY_PRINT));

        //         return redirect()->route('signin')->withErrors($message)->withInput();
        //     }
    }
}
