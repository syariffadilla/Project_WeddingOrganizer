<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket';
    protected $primaryKey = 'paket_id'; // Replace 'transaksi_id' with the actual primary key column name
    protected $guarded = ['paket_id']; // Specify the primary key column name in the 'guarded' property

    public function carts()
    {
        return $this->hasMany(Cart::class, 'id_paket');
    }
}
