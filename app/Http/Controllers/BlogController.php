<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::select('judul', 'slug', 'ringkasan', 'gambar', 'created_at')->latest()->paginate(12);
        return view("blog", compact('blog'));
    }

    public function index_kelola()
    {
        $blog = Blog::latest()->get();
        return view("kelola-blog.kelola-blog", compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelola-blog.tambah-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|min:5|max:100',
            'gambar' => 'required|image|file|max:1024',
            'artikel' => 'required|min:20|max:15000'
        ]);

        $request->artikel = str_replace("&nbsp;", "", strip_tags($request->artikel));

        $validatedData['gambar'] = $request->file('gambar')->store('gambar-blog');
        $validatedData['ringkasan'] = Str::limit(str_replace("&nbsp;", "", strip_tags($request->artikel)), 180);
        $validatedData['penulis'] = auth()->user()->name;

        Blog::create($validatedData);
        $request->session()->flash('message', 'Berhasil menambahkan blog!');
        return redirect('/kelola-blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('detail-blog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('kelola-blog.edit-blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'judul' => 'required|min:5|max:100',
            'gambar' => 'image|file|max:1024',
            'artikel' => 'required|min:20|max:15000'
        ]);

        if($request->file('gambar')){
            if($request->gambarlama){
                Storage::delete($request->gambarlama);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-blog');
        }

        $validatedData['ringkasan'] = Str::limit(str_replace("&nbsp;", "", strip_tags($request->artikel)), 180);
        $validatedData['penulis'] = auth()->user()->name;

        Blog::where('id', $blog->id)->update($validatedData);
        $request->session()->flash('message', 'Berhasil mengedit blog!');
        return redirect('/kelola-blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if($blog->gambar){
            Storage::delete($blog->gambar);
        }
        Blog::destroy($blog->id);
        return redirect('/kelola-blog')->with('message', 'Blog berhasil dihapus!');
    }
}
