@extends('layouts.template')
@section('main')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Pengumuman</h3>
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
                <i class="fa fa-plus"></i> data
              </button><br><br>
              <div class="container-fluid">
                <table class="table table-bordered datatable">
                	<thead>
                		<tr>
                			<th>No</th>
                			<th>Judul</th>
                			<th>Pengumuman</th>
                			<th>Tanggal Post</th>
                			<th></th>
                		</tr>
                	</thead>
                	<tbody>
                		@for($i = 1; $i <= 13; $i++)
                		<tr>
                			<td>{{ $i }}</td>
                			<td>judul pengumuman</td>
                			<td>isi dari sebuah pengumuman yang telah dibuat...</td>
                			<td>02-january-2019</td>
                			<td>
                				<a href="" class="btn btn-default btn-sm">Edit</a>
                			</td>
                		</tr>
                		@endfor
                	</tbody>
                </table>
              </div>
              <br><br>
            </div>
            </div>
        </div>
      
    </div>
    </div>
  </div>

<div class="modal fade" id="modal-default" style="display: none;">
  <div class="modal-dialog modal-lg">
    <form action="{{url('/home/input/siswa')}}" method="post">
      @csrf
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Tambah Pengumuman</h4>
      </div>
      <div class="modal-body">
      <div class="row">
       <div class="col-md-12">
    	<div class="container-fluid">
    		<div class="col-md-12">
    		<label >Judul</label>
    		<input type="text" name="judul" class="form-control" placeholder="Enter Ujian">
    		</div>
    		<div class="col-md-12">
    		<label >Pengumuman</label>
    		<textarea class="ckeditor" id="ckeditor" name="profile"></textarea>
    		</div>
    		<br><br>
    	</div>
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
@endsection