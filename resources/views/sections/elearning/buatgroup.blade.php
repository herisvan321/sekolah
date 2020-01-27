@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Buat Group</h3>
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

	          <div class="col-md-9">
	            <h3>View Group</h3>
	            <table class="table table-striped table-bordered datatable">
	              <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Pin</th>
	                  <th>Judul </th>
	                  <th>Pertemuan</th>
	                  <th>Deskription</th>
	                  <th>Member</th>
	                  <th></th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                	<td>1</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="{{ url('/homeAdmin/masuk-group/e-learning') }}" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                <tr>
	                	<td>2</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                <tr>
	                	<td>3</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                <tr>
	                	<td>4</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                <tr>
	                	<td>5</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                <tr>
	                	<td>6</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                <tr>
	                	<td>7</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                <tr>
	                	<td>8</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                <tr>
	                	<td>9</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                <tr>
	                	<td>10</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="#" class="btn btn-default btn-sm">Edit</a>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
	                	</td>
	                </tr>
	                
	              </tbody>
	            </table>
	          </div>
 	   			<div class=" col-md-3">
 	   				<form action="{{url('home/keuangan/jasa')}}" method="post">
 	   				@csrf
 	   				<label for="nmkom">Judul Group</label>
 	   				<input type="text" name="judulgroup" id="nmkom" placeholder="Enter Judul Group" class="form-control" required="required">
 	   				<label for="jumpertemuan">Masukan Jumlah Pertemuan</label>
					<input type="number" name="pertemuan" value="16" class="form-control" id="jumpertemuan" required="required">
 	   				<label>Description</label>
 	   				<textarea name="description" class="form-control" required="required"></textarea>
 	   				 <br>
 	   				<input type="submit" value="Submit" class="btn btn-primary">
 	   			</form>
 	   			</div>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection

