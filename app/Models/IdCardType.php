<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdCardType extends Model
{
    use HasFactory;
    protected $fillable = ['type']; // as same as database field
}
