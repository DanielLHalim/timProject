<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tProduksi extends Model
{
    use HasFactory;
    protected $fillable = ['kodeBarang','namaBarang'];
}
