@extends('layouts.template')
@section('main')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Input Periode</h3>
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
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i> Siswa
              </button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-importdatatsiswa">
                <i class="fa fa-plus"></i> Import siswa
              </button><br><br>
              <table id="example1" class="table table-bordered table-striped datatable">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Periode</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Tempat/Tanggal Lahir</th>
                  <th>Kelas</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                <tr>
                  <td>2</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                <tr>
                  <td>3</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                <tr>
                  <td>4</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                <tr>
                  <td>5</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                <tr>
                  <td>6</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                <tr>
                  <td>7</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                <tr>
                  <td>8</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                <tr>
                  <td>9</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                <tr>
                  <td>10</td>
                  <td>2020/2021</td>
                  <td>12345678</td>
                  <td>Nama Lengkap siswa</td>
                  <td>padang/01-01-1995</td>
                  <td>X-TKJ-1</td>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
        </div>
      
    </div>
    </div>
  </div>

<div class="modal fade" id="modal-default" style="display: none;">
  <div class="modal-dialog">
    <form action="{{url('/home/input/siswa')}}" method="post">
      @csrf
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Input data Siswa Ujian</h4>
      </div>
      <div class="modal-body">
       <div class="col-md-12">
    	<div class="container-fluid">
    		<div class="col-md-12">
    		<label >Periode</label>
    		<select name="id_periode" class="form-control">
         
        </select>
    		</div>
    		<div class="col-md-12">
    		<label >No Ujian</label>
    		<input type="text" name="noujian" class="form-control" placeholder="Enter No Ujian">
    		</div>
    		<div class="col-md-12">
    		<label >NIS</label>
    		<input type="text" name="nis" class="form-control" placeholder="Enter Nis">
    		</div>
    		<div class="col-md-6">
    		<label >Nama depan:</label>
    		<input type="text" name="namadepan" class="form-control" placeholder="Enter Nama depan">
    		</div>
        <div class="col-md-6">
        <label >Nama belakang</label>
        <input type="text" name="namabelakang" class="form-control" placeholder="Enter Nama belakang">
        </div>
    		<div class="col-md-6">
    		<label >Tempat</label>
    		<input type="text" name="tmp_lahir" class="form-control" placeholder="Enter Tempat Lahir">
    		</div>
    		<div class="col-md-6">
    		<label >Tanggal Lahir</label>
    		<input type="date" name="tgl_lahir" class="form-control" placeholder="Enter Priode Format 2019/2020">
    		</div>
    		<div class="col-md-12">
    		<label >Kelas</label>
    		<select name="id_kelas" class="form-control" required>
          <option value="">--pilih--</option>
         
    		</select>
    		</div>
    		<span style="color:red"><i>* isi data dengan Benar</i></span>
    		<br><br>
    	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-importdatatsiswa" style="display: none;">
  <div class="modal-dialog">
  <form method="post" action="{{ url('/home/import/siswa') }}" enctype="multipart/form-data">
    @csrf
       <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Import data Siswa</h4>
      </div>
      <div class="modal-body">
       <div class="col-md-12">
          <label>Kelas :</label>
          <select name="kelas" required class="form-control">
            <option value="">---pilih---</option>
          
          </select>
          <label>Inport data</label>
        <input type="file" name="file" class="form-control">
        <span style="color:red"><i>* Import data menggunakan Format Exel(CSV)</i></span><br>
        Download Example Terbaru <a href="{{ url('/home/export/siswa') }}">disini <i class="fa  fa-download"></i></a><br><br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
	</div>
@endsection