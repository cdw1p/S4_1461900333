<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
  public $timestamps = false;
  protected $table = 'kamar';
  protected $fillable = [
    'id',
    'id_pasien',
    'id_dokter'
  ];
}
