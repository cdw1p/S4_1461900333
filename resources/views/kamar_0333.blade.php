@extends('main_0333')
@section('content')
<div class="container-xl">
   <div class="table-responsive">
      <div class="table-wrapper">
         <div class="table-title">
            <div class="row">
               <div class="col-sm-5">
                  <h2>Data <b>Kamar</b></h2>
               </div>
            </div>
         </div>
         <table class="table table-striped table-hover">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Nama Pasien</th>
                  <th>Alamat Pasien</th>
                  <th>Nama Dokter</th>
                  <th>Jabatan Dokter</th>
               </tr>
            </thead>
            <tbody>
              @foreach($data as $v)
               <tr>
                  <td>{{ $v->id }}</td>
                  <td>{{ $v->nama_pasien }}</td>
                  <td>{{ $v->alamat }}</td>
                  <td>{{ $v->nama_dokter }}</td>
                  <td>{{ $v->jabatan }}</td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection