@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Laporan Group</h3>
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
	              	@for($i = 1; $i <= 20; $i++)
	                <tr>
	                	<td>{{ $i }}</td>
	                	<td>1m1nmDRs</td>
	                	<td>ini judul group</td>
	                	<td>16</td>
	                	<td>description untuk sebuah group</td>
	                	<td>20</td>
	                	<td>
	                		<a href="{{ url('/homeAdmin/detail-laporan-group/e-learning') }}" class="btn btn-info btn-sm">Lihat</a>
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

