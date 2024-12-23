<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'nama', 
        'jenis', 
        'alamat', 
        'harga_jual', 
        'harga_beli', 
        'logosupplier'
        ];
}
