<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SignUpController extends Controller
{

    public function signup(Request $request)
    {
        // menangkap data inputan
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        // menentukan rules
        $rules = [
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => [
                'required',
                'min:8', // Minimal 8 karakter
                'regex:/[0-9]/' // Minimal satu angka
            ]
        ];

        // custome message error
        $message = [
            'required' => 'Kolom :attribute harus diisi.',
            'unique' => ':attribute sudah digunakan.',
            'email' => 'Format :attribute tidak valid.',
            'min' => 'Kata sandi minimal harus :min karakter.',
            'regex' => 'Kata sandi harus memiliki setidaknya satu angka.'
        ];

        // membuat validasi apakah inputan sudah sesuai dengan aturan/rules
        $validator = Validator::make($data, $rules, $message);

        // kondisi ketika validasi berhasil, menyimpan hasil inputan ke database
        if ($validator->passes()) {

            // add data into database using query builder
            try {
                DB::table('users')->insert([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password'])
                ]);

                Log::info("IP " . $request->ip() . " berhasil daftar dengan email: " .  $data['email']);


                return response()->redirectToRoute('signin');
            } catch (\Illuminate\Database\QueryException $t) {

                Log::info("user dengan IP " . $request->ip . " gagal masuk dalam database " . $data['email'] . ' pesan error : ' . $t->getMessage());

                return response()->redirectToRoute('signup')
                    ->withErrors('error', 'Mohon coba lagi!');
            }
        }

        // langkah yang dilakukan ketika gagal yaitu dengan mengambil pesan erorrnya dan menulis pesan kesalahannya di log file serta redirect ulang kehalaman signup sambil membawa pesan kesalahan untuk di tuliskan di halaman signup.

        $message = $validator->getMessageBag();
        Log::info($message->all());


        return redirect()->route('signup')
            ->withErrors($validator->errors())
            ->withInput();
    }
}
