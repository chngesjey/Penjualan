<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori'; //ini ditambahkan jika nama tabel kita tidak jamak (dalam bahasa inggris)
    
    // ini jika kita menggunakan Eloquent ORM
    protected $guarded = []; 

    public function kategori() {
        return $this->belongsToMany(Barang::class);
    }
}
