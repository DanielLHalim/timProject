<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tBahanbaku extends Model
{
    use HasFactory;
    protected $fillable = ['kodeBahanBaku','jenisBahanBaku'];
}
