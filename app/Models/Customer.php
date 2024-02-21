<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'contact', 'email', 'idcard_type_id', 'id_card_no', 'address', 'status',]; // as same as database field
}

