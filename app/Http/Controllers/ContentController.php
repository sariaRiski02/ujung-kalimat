<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContentController extends Controller
{

    public function content(Request $request)
    {



        $oldCategory = $request->input('category');
        $newCategory = $request->input('new_category');



        $category = [];
        if ($newCategory) {
            $category = [
                'key' => 'new_category',
                'value' => $newCategory
            ];
        } elseif ($oldCategory !== 'Pilih kategori') {
            $category = [
                'key' => 'category',
                'value' => $oldCategory
            ];
        } else {

            return redirect('/nulis')->withErrors([
                'error' => 'category harus diisi'
            ]);
        }

        // validasi data

        $data = [
            $category['key'] => $category['value'],
            'content' => $request->input('content'),
            'title' => $request->input('title'),
            'image' => $request->file('image')
        ];

        $rules = [
            $category['key'] => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $message = [
            'required' => 'kolom :attribute harus diisi',
            'image' => 'kolom :attribute harus berupa gambar',
            'mimes' => 'kolom :attribute harus memiliki format file: :values',
            'max' => 'ukuran :attribute tidak boleh melebihi :max kb'
        ];

        $validation = Validator::make($data, $rules, $message);


        if ($validation->passes()) {

            // pengecekan untuk Category
            $exist = Category::query()->where('name_category', '=', $category['value'])->pluck('id_category')->first();

            $id_category = '';
            if ($exist) {
                $id_category = $exist;
            } else {
                $item = new Category();
                $item->name_category = $category['value'];
                $item->save();
            }

            // mengambil data session untuk authentication user
            $id_user = user::query()->where('email', '=', session('key'))->pluck('id_user')->first();

            $name_image = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $extention = $image->getClientOriginalExtension();
                $name_image = $data['title'] . time() . '.' . $extention;
                $image->move(public_path('pictures'), $name_image);
            }

            // memasukan data ke database
            $post = new post();

            $id = Category::latest()->first('id_category')->id_category;
            $id_category = $id ?? $id_category;

            $post->id_user = $id_user;
            $post->id_category = $id_category;
            $post->title = $data['title'];
            $post->content = $data['content'];
            $post->name_image = $name_image;
            $post->save();
            return redirect('/beranda');
        }

        if ($validation->fails()) {

            return redirect('/nulis')->withErrors($validation->errors());
        }
    }

    public function writePage()
    {
        return view(
            'writePage.index',
            [
                'categories' => Category::pluck('name_category')
            ]
        );
    }


    public function contentPage()
    {
        $data = post::query()->orderBy('created_at', 'desc')->get();
        return view('post.index', ['data' => $data]);
    }
}
