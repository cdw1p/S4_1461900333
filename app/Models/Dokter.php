<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
  public $timestamps = false;
  protected $table = 'dokter';
  protected $fillable = [
    'id',
    'nama',
    'jabatan'
  ];
}
