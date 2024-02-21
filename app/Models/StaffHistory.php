<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffHistory extends Model
{
    use HasFactory;
    protected $fillable = ['staff_id', 'shift_id', 'from', 'to']; // as same as database field
}
