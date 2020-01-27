@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Group</h3>
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
	            <div class="container-fluid">
	            	 <form action="{{url('/homedosen/proses/absen')}}" method="post" >
				      {{csrf_field()}}
				      <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success"><i class="fa fa-edit"></i> materi</button>
				      <button type="button" data-toggle="modal" data-target="#myModalKuis"   class="btn btn-success"><i class="fa fa-edit"></i> kuis</button>
				      <input type="hidden" name="pertemuan" value="">
				      <input type="hidden" name="id_group" value="">
				        <button type="button" class="btn btn-primary disabled"><i class="fa fa-edit " ></i> Absen</button>
				      <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Absen</button>
				      </form>
				        <hr>
						<div class="row">
						 	<div class="col-lg-4 ">
						 	<h4 class="w3-blue w3-padding">Materi :</h4>
						 	<table class="table table-bordered">
						 		<tr>
						 			<th>No</th>
						 			<th>Judul</th>
						 			<th>Type</th>
						 			<th></th>
						 		</tr>
						 		<tr>
						 			<td>1</td>
						 			<td>judul materi pertemuan</td>
						 			<td>file</td>
						 			<td>
						 				<a href="#" class="btn btn-default btn-sm">Edit</a>
						 			</td>
						 		</tr>
						 		<tr>
						 			<td>2</td>
						 			<td>judul materi pertemuan</td>
						 			<td>Video</td>
						 			<td>
						 				<a href="#" class="btn btn-default btn-sm">Edit</a>
						 			</td>
						 		</tr>
						 	</table>
						    <p align="center" class="w3-text-grey">Kosong...</p>
						 	</div>
						 	<div class="col-lg-4 ">
						 		<h4 class="w3-blue w3-padding">Kuis:</h4>
						 	<table class="table table-bordered">
						 		<tr>
						 			<th>No</th>
						 			<th>Judul</th>
						 			<th>waktu</th>
						 			<th></th>
						 		</tr>
						 		<tr>
						 			<td>1</td>
						 			<td>judul Kuis pertemuan</td>
						 			<td>30 Menit</td>
						 			<td>
						 				<a href="{{ url('/homeAdmin/soal-group/e-learning') }}" class="btn btn-info btn-sm">Lihat</a>
						 			</td>
						 		</tr>
						 		<tr>
						 			<td>2</td>
						 			<td>judul Kuis pertemuan</td>
						 			<td>120 Menit</td>
						 			<td>
						 				<a href="#" class="btn btn-info btn-sm">Lihat</a>
						 			</td>
						 		</tr>
						 	</table>
						    <p align="center" class="w3-text-grey">Kosong...</p>
						 	</div>
						  <div class="col-lg-4 ">
						    <h4 class="w3-blue w3-padding">Tugas : </h4>

						 	<table class="table table-bordered">
						 		<tr>
						 			<th>No</th>
						 			<th>Tugas</th>
						 			<th></th>
						 		</tr>
						 		<tr>
						 			<td>1</td>
						 			<td>judul materi pertemuan</td>
						 			<td>
						 				<a href="#" class="btn btn-warning btn-sm">download</a>
						 			</td>
						 		</tr>
						 		<tr>
						 			<td>2</td>
						 			<td>judul materi pertemuan</td>
						 			<td>
						 				<a href="#" class="btn btn-warning btn-sm">download</a>
						 			</td>
						 		</tr>
						 	</table>
						    <p align="center" class="w3-text-grey">Kosong...</p>
						  </div>

						 </div>
	            </div>
	          </div>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@include('includes.modal.modalmateri')
@include('includes.modal.modalkuis')
@endsection

