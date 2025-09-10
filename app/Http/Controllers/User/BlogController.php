<?php

// app/Http/Controllers/User/BlogController.php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class BlogController extends BaseController
{
    public function index()
    {
        $blogs = Auth::user()->blogs()->latest()->get();
        return view('user.your-blog', compact('blogs'));
    }

    public function create()
    {
        return view('user.blog');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $folderName = Str::slug($user->nama_tim);

        $blogData = [
            'user_id' => $user->id,
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . uniqid(),
            'content' => $request->content,
        ];

        if ($request->hasFile('image')) {
    $imagePath = $request->file('image')->storeAs(
        'uploads/' . $folderName . '/blogs',
        'blog_' . time() . '.' . $request->file('image')->getClientOriginalExtension(),
        'public'  // Simpan di storage/app/public
    );

    // Simpan path relatif (tanpa 'public/')
    $blogData['image_path'] = str_replace('public/', '', $imagePath);
}

        Blog::create($blogData);

        return redirect()->route('user.your-blog')->with('success', 'Blog created successfully!');
    }

    public function show(Blog $blog)
    {
        // Pastikan blog milik user yang login
        if (auth()->id() !== $blog->user_id) {
            abort(403);
        }

        return view('user.blog.show', compact('blog'));
    }

    public function showModal(Blog $blog)
    {
        // Verifikasi kepemilikan blog
        if (auth()->id() !== $blog->user_id) {
            abort(403);
        }

        return view('user.modal-content', compact('blog'));
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image_path) {
            Storage::disk('public')->delete($blog->image_path);
        }
        $blog->delete();
        return back()->with('success', 'Blog deleted successfully!');
    }
}
