<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $guarded = []; 

    public function barang() {
        return $this->belongsTo(Barang::class);
    }

    public function pembelian() {
        return $this->belongsTo(Pembelian::class);
    }
}
