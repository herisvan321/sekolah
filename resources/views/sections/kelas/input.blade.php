@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Input Kelas</h3>
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
	            <h3>View Kelas</h3>
	            <table class="table table-striped table-bordered datatable">
	              <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Kelas</th>
	                  <th>Deskription</th>
	                  <th></th>
	                </tr>
	              </thead>
	              <tbody>
	              	@for($i = 1; $i <= 15; $i++)
	                <tr>
	                	<td>{{ $i }}</td>
	                	<td>X</td>
	                	<td>Kelas X</td>
	                	<td>
	                		<a href="#" class="btn btn-default">Edit</a>
	                	</td>
	                </tr>
	                @endfor
	              </tbody>
	            </table>
	          </div>
 	   			<div class=" col-md-4">
 	   				<form action="{{url('home/keuangan/jasa')}}" method="post">
 	   				@csrf
 	   				<label for="nmkom">Kelas</label>
 	   				<input type="text" name="priode" id="nmkom" placeholder="Enter Periode cth: {{ date('Y').'/'.(date('Y') + 1) }}" class="form-control">
 	   				<label>Description</label>
 	   				<textarea name="description" class="form-control"></textarea>
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

