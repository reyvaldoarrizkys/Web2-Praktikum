<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    //thubungkan dengan tabel produk
    protected $table = 'produk';

    //uubah timestamps jadi false
    public $timestamps = false;

    //tentukan kolom yang bisa diisi user
    protected $fillable = [
        'kode',               // Kode produk
        'nama',               // Nama produk
        'harga_jual',         // Harga jual produk
        'harga_beli',         // Harga beli produk
        'stok',               // Jumlah stok produk
        'min_stok',           // Jumlah minimal stok produk
        'deskripsi',          // Deskripsi produk
        'kategori_produk_id', // ID kategori produk
    ];

    //buat fungsi untuk relasi ke tabel kategori_produk
    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }

    //buat fungsiuntuk nampilin data produk
    public static function getAllProduk()
    {
        //return DB::table('produk')->get();

        //bikin Query 
        $alldata = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return $alldata;
    }
}
