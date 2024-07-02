<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $primaryKey = 'booking_id';
    protected $guarded = ['booking_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
// Booking.php (Model)
public function paket()
{
    return $this->belongsTo(Paket::class, 'paket_id');
}


    public function vendor1()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id_1');
    }

    public function vendor2()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id_2');
    }

    public function vendor3()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id_3');
    }

    public function vendor4()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id_4');
    }

    public function vendor5()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id_5');
    }
}
