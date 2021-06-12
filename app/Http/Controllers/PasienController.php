<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Imports\PasienImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PasienController extends Controller
{
  public function index() {
    return view('pasien_0333', ['data' => Pasien::all()]);
  }

  public function create(Request $request) {
    return view('pasien_create_0333');
  }

  public function edit(Request $request) {
    $findData = Pasien::findOrFail($request->id);
    if ($findData) {
      return view('pasien_edit_0333', ['data' => $findData]);
    } else {
      return redirect()->route('pasien.index');
    }
  }

  public function store(Request $request) {
    Pasien::create([ 'nama' => $request->inputName, 'alamat' => $request->inputAddress ]);
    return redirect()->route('pasien.index');
  }

  public function update(Request $request) {
    Pasien::findOrFail($request->id)->update([ 'nama' => $request->inputName, 'alamat' => $request->inputAddress ]);
    return redirect()->route('pasien.index');
  }

  public function delete(Request $request) {
    Pasien::findOrFail($request->id)->delete();
    return redirect()->route('pasien.index');
  }

  public function import(Request $request) {
    $this->validate($request, [ 'file' => 'required|mimes:csv,xls,xlsx' ]);
    $file = $request->file('file');
    $nama_file = rand().$file->getClientOriginalName();
    $file->move('file_pasien', $nama_file);
    Excel::import(new PasienImport, public_path('/file_pasien/'.$nama_file));
    return redirect()->route('pasien.index');
  }
}