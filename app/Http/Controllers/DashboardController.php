<?php

namespace App\Http\Controllers;
use App\Models\tabel_peminjaman;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function tampil()
    {
        $tabel_peminjaman = tabel_peminjaman::all();
        // return view('Breeze.index',compact('tabel_peminjaman'));
        return view('sneatku.html.index', compact('tabel_peminjaman'));
    }

    public function tampilpinjam()
    {
        return view('sneatku.html.tambah-pinjam');
    }

    public function insertpinjam(Request $request)
    {
        $data = $request->all();
        $pinjam = new tabel_peminjaman();
        $pinjam->nama_peminjam = $data['nama_peminjam'];
        $pinjam->nama_barang = $data['nama_barang'];
        $pinjam->jumlah_pinjam = $data['jumlah_pinjam'];
        $pinjam->save();
        return redirect()->route('dashboard');

    }

    public function delete(string $id_pinjam)
    {
        tabel_peminjaman::where('id_pinjam',$id_pinjam)->delete();
        return redirect()->to('dashboard')->with('success');
    }
}