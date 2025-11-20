<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Perubahan: Mengimpor trait SoftDeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    // Perubahan: Menggunakan trait SoftDeletes
    use SoftDeletes;
    
    protected $fillable = ['name', 'email', 'message'];
}