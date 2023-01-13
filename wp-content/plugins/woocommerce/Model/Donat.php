<?php

namespace App\Models;
    
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donat extends Model
{
    use HasFactory;

    protected $fillable = ['varian', 'harga', 'tgl_pembuatan', 'tgl_expired'];
}