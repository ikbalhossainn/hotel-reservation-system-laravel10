<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $fillable = ['complainer', 'complaint_type', 'complain', 'status', 'resolve_date',]; // as same as database field
}


