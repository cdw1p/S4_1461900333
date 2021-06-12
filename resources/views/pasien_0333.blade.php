@extends('main_0333')
@section('content')
<div class="container-xl">
   <div class="table-responsive">
      <div class="table-wrapper">
         <div class="table-title">
            <div class="row">
               <div class="col-sm-5">
                  <h2>Data <b>Pasien</b></h2>
               </div>
               <div class="col-sm-7">
                  <a href="/pasien/import" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#importExcel"><i class="material-icons">&#xE147;</i> <span>Import Data</span></a>
                  <a href="/pasien/create" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
               </div>
            </div>
         </div>

         <!-- Import Excel -->
         <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <form method="POST" action="/pasien/import" enctype="multipart/form-data">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                     </div>
                     <div class="modal-body">
                        {{ csrf_field() }}
                        <label>Pilih file excel</label>
                        <div class="form-group">
                           <input type="file" name="file" required="required">
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>

         <table class="table table-striped table-hover">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
              @foreach($data as $v)
               <tr>
                  <td>{{ $v->id }}</td>
                  <td>{{ $v->nama }}</td>
                  <td>{{ $v->alamat }}</td>
                  <td>
                    <a href="/pasien/edit/{{ $v->id }}" class="settings" title="Edit"><i class="material-icons">&#xe150;</i></a>
                    <a href="/pasien/delete/{{ $v->id }}" class="delete" title="Hapus"><i class="material-icons">&#xE5C9;</i></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection