@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Bimbingan Koseling</h3>
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
	            <table class="table table-striped table-bordered datatable">
	              <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Tanggal</th>
	                  <th>Judul</th>
	                  <th>Durasi</th>
	                  <th>Keputusan</th>
	                  <th>Status</th>
	                  <th>jml Siswa</th>
	                  <th></th>
	                </tr>
	              </thead>
	              <tbody>
	              	@for($i=1; $i <= 10; $i++)
	                <tr>
	                	<td>{{ $i }}</td>
	                	<td>01-01-2020</td>
	                	<td>Judul Kasus Pada bk</td>
	                	<td>30m</td>
	                	<td>keputusan</td>
	                	<td>status</td>
	                	<td>3</td>
	                	<td>
	                		<a href="#" class="btn btn-info btn-sm">Lihat</a>
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
	</div>
@endsection

