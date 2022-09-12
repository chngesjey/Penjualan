<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    protected $guarded = []; 

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }
}
