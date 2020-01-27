@extends('layouts.template')
@section('main')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Data Siswa</h3>
                <ul class="panel-controls" style="margin-top: 2px;">
                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>        
                    <ul class="dropdown-menu">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                    </ul>                                        
                </li>                                        
            </ul>    
            </div>
            <div class="panel-body">
              <div class="container-fluid">
                <div class="pull-right">
                  
                </div>
              </div>

            <div class="col-md-12">
                <form action="{{url('/home/daftar/peserta')}}" method="get">
            <div class="col-md-5">
              Periode :
              <select name="periode" class="form-control">
               <option value="">--Pilih--</option>
              </select>  
            </div>
            <div class="col-md-5">
              Kelas :
              <select name="kelas" class="form-control">
               <option value="">--Pilih--</option>
              </select>  
            </div>
            <div class="col-md-2"><br>
              <input type="submit" value="Submit" class="btn btn-primary">
            </div>
          </form> <br><br>
              <br><br>
              <table id="example1" class="table table-bordered table-striped datatable">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Periode</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Tempat/Tanggal Lahir</th>
                  <th>Kelas</th>
                  <th>Akun Ortu</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @for($i = 1; $i <= 15; $i++)
                <tr>
                  <td>{{ $i }}</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  <th>
                     <a href="#" class="btn btn-info">Akun ortu</a>
                  </th>
                  <td>
                    <a href="#" class="btn btn-default">Edit</a>
                  </td>
                </tr>
                @endfor
                </tfoot>
              </table>
            </div>
            </div>
        </div>
      
    </div>
    </div>
  </div>
@endsection


