<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
  public $timestamps = false;
  protected $table = 'pasien';
  protected $fillable = [
    'id',
    'nama',
    'alamat'
  ];
}
