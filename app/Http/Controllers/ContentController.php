<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{
    public function content(Request $request)
    {
        $data = [
            'category' => $request->input('category'),
            'new_category' => $request->input('make_category'),
            'title' => $request->input('title'),
            'image' => $request->file('image')
        ];

        $rules = [
            'title' => 'required',
            'content' => 'required',
            'name_image' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $message = [
            'required' => 'kolom :atribute harus diisi'
        ];

        $validation = Validator::make($data, $rules, $message);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $name_image = $data['title'] . time() . '.' . $extention;
            $image->move(public_path('images'), $name_image);
        }

        if ($validation->passes()) {
            $post = new post();

            $post->title = $data['title'];
            $post->content = $data['content'];
            $post->category = $data['category'];
        }
    }
}
