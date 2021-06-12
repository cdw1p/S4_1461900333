<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
  public function index() {
    $query = Kamar::select('kamar.id', 'pasien.nama as nama_pasien', 'pasien.alamat', 'dokter.nama as nama_dokter', 'dokter.jabatan')
      ->join('pasien', 'kamar.id_pasien', '=', 'pasien.id')
      ->join('dokter', 'kamar.id_dokter', '=', 'dokter.id')
      ->get();
    return view('kamar_0333', ['data' => $query]);
  }
}