<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'tblproduk';
}
