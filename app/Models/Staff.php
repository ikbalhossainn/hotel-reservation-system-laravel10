<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = ['emp_id', 'name', 'contact', 'address', 'department_id', 'designation_id', 'shift_id', 'idcard_type_id', 'id_card_number', 'salary', 'joining_date','status' ]; // as same as database field
}

