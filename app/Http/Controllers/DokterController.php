<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Imports\DokterImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DokterController extends Controller
{
  public function index() {
    return view('dokter_0333', ['data' => Dokter::all()]);
  }

  public function create(Request $request) {
    return view('dokter_create_0333');
  }

  public function edit(Request $request) {
    $findData = Dokter::findOrFail($request->id);
    if ($findData) {
      return view('dokter_edit_0333', ['data' => $findData]);
    } else {
      return redirect()->route('dokter.index');
    }
  }

  public function store(Request $request) {
    Dokter::create([ 'nama' => $request->inputName, 'jabatan' => $request->inputRole ]);
    return redirect()->route('dokter.index');
  }

  public function update(Request $request) {
    Dokter::findOrFail($request->id)->update([ 'nama' => $request->inputName, 'jabatan' => $request->inputRole ]);
    return redirect()->route('dokter.index');
  }

  public function delete(Request $request) {
    Dokter::findOrFail($request->id)->delete();
    return redirect()->route('dokter.index');
  }

  public function import(Request $request) {
    $this->validate($request, [ 'file' => 'required|mimes:csv,xls,xlsx' ]);
    $file = $request->file('file');
    $nama_file = rand().$file->getClientOriginalName();
    $file->move('file_siswa', $nama_file);
    Excel::import(new DokterImport, public_path('/file_siswa/'.$nama_file));
    return redirect()->route('dokter.index');
  }
}