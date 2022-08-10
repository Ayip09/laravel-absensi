<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $title = 'Daftar Postingan';
        return view('posts', compact('posts', 'title'));
    }

    public function show($slug)
    {
        $data = Post::where('slug', $slug)->first();
        $title = $data->title;
        return view('post', compact('data', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Postingan';
        return view('create-post', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $slug = strtolower(str_replace(' ', '-', $request->title));
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $slug,
            'author' => $request->author,
        ];

        Post::create($data);
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $data = Post::find($id);
        $title = 'Edit Postingan';
        return view('edit-post', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $slug = strtolower(str_replace(' ', '-', $request->title));
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $slug,
            'author' => $request->author,
        ];

        Post::where('id', $id)->update($data);
        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('post.index');
    }
}
