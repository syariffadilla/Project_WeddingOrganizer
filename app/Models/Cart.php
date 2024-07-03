<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $guarded = ['id'];

    // Definisikan nama kolom timestamps jika berbeda dari default
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_At';
}
