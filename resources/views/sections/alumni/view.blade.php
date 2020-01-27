@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">View Alumni</h3>
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
	            <table class="table table-bordered datatable">
	            	<thead>
	            	<tr>
	            		<th>No</th>
	            		<th>Nama</th>
	            		<th>tahun lulus</th>
	            		<th>pesan</th>
	            		<th></th>
	            	</tr>
	            	</thead>
	            	<tbody>
	            	<tr>
	            		<td>1</td>
	            		<td>Nama Alumni</td>
	            		<td>2017</td>
	            		<td>ini adalah pesan dari alumni tahun 2017...</td>
	            		<td>
	            			<a href="#" class="btn btn-info">Lihat</a>
	            			<a href="#" class="btn btn-default">Edit</a>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>2</td>
	            		<td>Nama Alumni</td>
	            		<td>2017</td>
	            		<td>ini adalah pesan dari alumni tahun 2017...</td>
	            		<td>
	            			<a href="#" class="btn btn-info">Lihat</a>
	            			<a href="#" class="btn btn-default">Edit</a>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>3</td>
	            		<td>Nama Alumni</td>
	            		<td>2017</td>
	            		<td>ini adalah pesan dari alumni tahun 2017...</td>
	            		<td>
	            			<a href="#" class="btn btn-info">Lihat</a>
	            			<a href="#" class="btn btn-default">Edit</a>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>4</td>
	            		<td>Nama Alumni</td>
	            		<td>2017</td>
	            		<td>ini adalah pesan dari alumni tahun 2017...</td>
	            		<td>
	            			<a href="#" class="btn btn-info">Lihat</a>
	            			<a href="#" class="btn btn-default">Edit</a>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>5</td>
	            		<td>Nama Alumni</td>
	            		<td>2017</td>
	            		<td>ini adalah pesan dari alumni tahun 2017...</td>
	            		<td>
	            			<a href="#" class="btn btn-info">Lihat</a>
	            			<a href="#" class="btn btn-default">Edit</a>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>6</td>
	            		<td>Nama Alumni</td>
	            		<td>2017</td>
	            		<td>ini adalah pesan dari alumni tahun 2017...</td>
	            		<td>
	            			<a href="#" class="btn btn-info">Lihat</a>
	            			<a href="#" class="btn btn-default">Edit</a>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>7</td>
	            		<td>Nama Alumni</td>
	            		<td>2017</td>
	            		<td>ini adalah pesan dari alumni tahun 2017...</td>
	            		<td>
	            			<a href="#" class="btn btn-info">Lihat</a>
	            			<a href="#" class="btn btn-default">Edit</a>
	            		</td>
	            	</tr>
	            	</tbody>
	            </table>
	          </div>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection

