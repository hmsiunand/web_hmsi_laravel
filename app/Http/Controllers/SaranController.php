<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saran = Saran::latest()->get();
        return view("kelola-blog.kotak-pesan", compact('saran'));
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
            'nama' => 'required|min:3|max:100',
            'saran' => 'required|min:10|max:1000'
        ]);

        Saran::create($validatedData);

        $request->session()->flash('message', 'Berhasil!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saran $saran)
    {
        Saran::destroy($saran->id);
        return redirect('/kotak-pesan')->with('message', 'Pesan berhasil dihapus!');
    }
}
