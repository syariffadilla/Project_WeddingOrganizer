<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;


    protected $table = 'vendor';
    protected $primaryKey = 'vendor_id'; // Replace 'transaksi_id' with the actual primary key column name
    protected $guarded = ['vendor_id']; // Specify the primary key column name in the 'guarded' property

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'vendor_id_1');
    }
}
