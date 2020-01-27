@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Aksi Kelas</h3>
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
              <div class=" col-md-12" style="background: #dfdfdf;padding-bottom:20px;border-radius: 25px;border:1px dashed #E61E96">
 	   				<div class="col-md-5">
 	   					<form action="{{url('home/keuangan/jasa')}}" method="post">
	 	   				@csrf
		 	   				<h3>Kelas Asal</h3>
		 	   				<label>Periode</label>
		 	   				<select class="form-control" name="periode">
		 	   					<option>--pilih--</option>
		 	   				</select>
		 	   				<label>Tingkat Kelas</label>
		 	   				<select class="form-control" name="kelas">
		 	   					<option>--pilih--</option>
		 	   				</select>
		 	   				<label>Rombongan Belajar</label>
		 	   				<select class="form-control" name="rombel">
		 	   					<option>--pilih--</option>
		 	   				</select>
		 	   			</form>
 	   				</div>
 	   				<div class="col-md-2" align="center">
 	   					<h1>&nbsp;</h1><br>
 	   					<i class="fa fa-random fa-wd fa-5x m-t-md"></i>
 	   				</div>
 	   				<div class="col-md-5">
 	   					<form action="{{url('home/keuangan/jasa')}}" method="post">
	 	   				@csrf
		 	   				<h3>Kelas Tujuan</h3>
		 	   				<label>Periode</label>
		 	   				<select class="form-control" name="periode">
		 	   					<option>--pilih--</option>
		 	   				</select>
		 	   				<label>Tingkat Kelas</label>
		 	   				<select class="form-control" name="kelas">
		 	   					<option>--pilih--</option>
		 	   				</select>
		 	   				<label>Rombongan Belajar</label>
		 	   				<select class="form-control" name="rombel">
		 	   					<option>--pilih--</option>
		 	   				</select>
		 	   			</form>
 	   				</div>
 	   			</div>
	          <div class="col-md-6">
	          	<br><br>
	            <table class="table table-striped table-bordered ">
	              <thead>
	                <tr>
	                  <th><center><input type="checkbox" name=""></center></th>
	                  <th>No</th>
	                  <th>Nis</th>
	                  <th>Nama</th>
	                  <th>Jenis Kelamin</th>
	                </tr>
	              </thead>
	              <tbody>
	              	@for($i=1;$i<=16;$i++)
	                <tr>
	                	<td><center><input type="checkbox" name=""></center></td>
	                	<td>{{ $i }}</td>
	                	<td>999329</td>
	                	<td>Ini adalah nama</td>
	                	<td>L/P</td>
	                </tr>
	                @endfor
	                
	              </tbody>
	            </table>
	          </div>
	          <div class="col-md-6">
	          	<br><br>
	            <table class="table table-striped table-bordered ">
	              <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Nis</th>
	                  <th>Nama</th>
	                  <th>Jenis Kelamin</th>
	                  <th></th>
	                </tr>
	              </thead>
	              <tbody>
	              	@for($i=1;$i<=16;$i++)
	                <tr>
	                	<td>{{ $i }}</td>
	                	<td>999329</td>
	                	<td>Ini adalah nama</td>
	                	<td>L/P</td>
	                	<td>
	                		<a href="#" class="btn btn-danger btn-sm">Hapus</a>
	                	</td>
	                </tr>
	                @endfor
	                
	              </tbody>
	            </table>
	          </div>
	          <div align="center"><input type="submit" value="Proses" class="btn btn-warning"></div>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection

