<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // protected
    protected $table = 'produk';
    protected $fillable = ['nama', 'model', 'harga', 'quantity', 'diskon', 'files'];
    
}
