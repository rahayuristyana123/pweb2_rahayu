<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\tabel_peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = tabel_peminjaman::all();
        return view('sneatku.html.peminjaman',compact(['peminjaman']));
    }

    public function store(Request $request)
    {
        peminjaman::create($request->except(['_token','submit']));
        return redirect('/peminjaman');
    }
}
