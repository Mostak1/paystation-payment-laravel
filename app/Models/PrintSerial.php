<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrintSerial extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
      'reg_id'
    ];
}
