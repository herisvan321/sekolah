@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Upload Document</h3>
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

	          <div class="col-md-8">
	            <table class="table table-striped table-bordered datatable">
	              <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Judul</th>
	                  <th>File</th>
	                  <th></th>
	                </tr>
	              </thead>
	              <tbody>
	              	@for($i=1; $i<=12; $i++)
	                <tr>
	                	<td>1</td>
	                	<td>Ini Judul file</td>
	                	<td>2019-01-01-24-21-33-judul-file</td>
	                	<td>
	                		<a href="#" class="btn btn-default">Download</a>
	                	</td>
	                </tr>
	                @endfor
	                
	              </tbody>
	            </table>
	          </div>
 	   			<div class=" col-md-4">
 	   				<form action="{{url('home/keuangan/jasa')}}" method="post">
 	   				@csrf
 	   				<label for="nmkom">Judul file</label>
 	   				<input type="text" name="priode" id="nmkom" placeholder="Enter Judul Periode" class="form-control">
 	   				<label>Upload</label>
 	   				<input type="file" name="file" class="form-control">
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

