@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Rombongan Belajar</h3>
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
              <div class=" col-md-12">
 	   				<div class="col-md-6">
 	   					<form action="{{url('home/keuangan/jasa')}}" method="post">
	 	   				@csrf
		 	   				<label>Periode</label>
		 	   				<select name="periode" class="form-control">
		 	   					<option>--pilih--</option>
		 	   				</select>
		 	   				<label>Kelas</label>
		 	   				<select name="kelas" class="form-control">
		 	   					<option>--pilih--</option>
		 	   				</select>
		 	   				<label>Wali kelas</label>
		 	   				<select name="kelas" class="form-control">
		 	   					<option>--pilih--</option>
		 	   				</select>
		 	   				<label>Nama Rombongan Belajar</label>
		 	   				<input type="text" name="nmrombel" class="form-control" placeholder="Cth : X-TKJ-1, X-RPL-2, X-MLD-3">
		 	   				<label>Ruangan</label>
		 	   				<input type="text" name="ruangan" class="form-control" >
		 	   				<label>Keterangan</label>
		 	   				<textarea class="form-control" name="keterangan"></textarea>
		 	   				 <br>
		 	   				<input type="submit" value="Submit" class="btn btn-primary">
		 	   			</form>
 	   				</div>
 	   			</div>
	          <div class="col-md-12">
	          	<br><br>
	            <table class="table table-striped table-bordered datatable">
	              <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Periode</th>
	                  <th>Kelas</th>
	                  <th>Wali Kelas</th>
	                  <th>Nama Rombel</th>
	                  <th>Ruangan</th>
	                  <th>Keterangan</th>
	                  <th></th>
	                </tr>
	              </thead>
	              <tbody>
	              	@for($i=1;$i<=16;$i++)
	                <tr>
	                	<td>{{ $i }}</td>
	                	<td>2020/2021</td>
	                	<td>X-TKJ-1</td>
	                	<td>Nama Wali Kelas</td>
	                	<td>Nama Rombel</td>
	                	<td>X-TKJ-1</td>
	                	<td>Keterangan</td>
	                	<td>
	                		<a href="#" class="btn btn-default">Edit</a>
	                	</td>
	                </tr>
	                @endfor
	                
	              </tbody>
	            </table>
	          </div>
 	   			
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection

