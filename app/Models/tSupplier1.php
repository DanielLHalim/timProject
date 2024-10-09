<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tSupplier1 extends Model
{
    use HasFactory;
    protected $fillable = ['kodeSupplier','namaSupplier','noHPSupplier','alamatSupplier'];
}
