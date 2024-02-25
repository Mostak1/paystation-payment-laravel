<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrintSerial extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
      'reg_id','p_serial',
    ];

    public function reg(){
      return $this->belongsTo(SeminarRegistration::class,'reg_id');
    }
}
