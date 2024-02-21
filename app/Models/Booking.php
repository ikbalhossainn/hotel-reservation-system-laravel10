<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'room_id', 'booking_date', 'check_in', 'check_out', 'total_bill', 'remaining_bill', 'status' ]; // as same as database field
}

 


