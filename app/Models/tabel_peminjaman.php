<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_peminjaman extends Model
{
    use HasFactory;

    protected $table = 'tabel_peminjaman';
    protected $guarded = [];
    // protected $fillable = ([
    //     'nama_peminjam', 'nama_barang', 'jumlah_pinjam'
    // ]);
}