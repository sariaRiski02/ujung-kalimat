<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'password' => 'required'
        ];

        // custome message error
        $message = [
            'required' => 'Kolom :attribute harus diisi.',
            'unique' => ':attribute sudah digunakan.',
            'email' => 'Format :attribute tidak valid.'
        ];

        // membuat validasi apakah inputan sudah sesuai dengan aturan/rules
        $validator = Validator::make($data, $rules, $message);

        // kondisi ketika validasi berhasil, menyimpan hasil inputan ke database
        if ($validator->passes()) {

            // insert data kedalam database menggunakan raw SQL
            // for learn only
            DB::insert(
                'INSERT INTO users (name, email, password) values (:name, :email, :password)',
                [
                    'name' => $data["name"],
                    'email' => $data["email"],
                    'password' => bcrypt($data["password"])
                ]
            );
            return response()->redirectToRoute('signin');
        }

        // langkah yang dilakukan ketika gagal yaitu dengan mengambil pesan erorrnya dan menulis pesan kesalahannya di log file serta redirect ulang kehalaman signup sambil membawa pesan kesalahan untuk di tuliskan di halaman signup.

        $message = $validator->getMessageBag();
        Log::info($message->all());


        return redirect()->route('signup')
            ->withErrors($validator->errors())
            ->withInput();
    }
}
