<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_peminjam extends Model
{
    use HasFactory;

    protected $table = "ms_peminjamaan";
    protected $primarkey = "kode_peminjaman";
    protected $keyType = "char";

    protected $fillable = [
        'kode_peminjaman',
        'nama_peminjam',
        'alamat_peminjam',
        'telp_peminjam'
    ]
}
