@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Absen Group</h3>
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
	            <p align="right"><a href="#" class="btn btn-success"><i class="fa fa-print"></i>  Cetak</a></p>
	            <table class="table table-striped table-bordered ">
	              	<tr>
						<th align="center">No</th>
						<th align="center">Nis</th>
						<th align="center">Nama</th>
						<th align="center">L/P</th>
						@for($i = 1; $i <= 5; $i++)
						<th align="center">Kuis {{$i}}</th>
						@endfor
						<th align="center">NA</th>
						<th align="center">NH</th>
					</tr>
					@for($j = 1; $j <= 15; $j++)
					<tr>
						<td>{{ $j }}</td>
						<td>9970838</td>
						<td>Nama Siswa</td>
						<td>L/P</td>
						@php($t = 0)
						@php($NA = 0)
						@for($h = 1; $h <= 5; $h++)
						<td align="center">{{ $o = rand(10,100) }}</td>
						@php($t += $o)
						@endfor
						<td>{{ $NA = $t / 5 }}</td>
						<td>
							@if(($NA > 80) && ($NA <= 100))
							A
							@elseif(($NA > 65) && ($NA <= 80))
							B
							@elseif(($NA > 55) && ($NA <= 65))
							C
							@elseif(($NA > 45) && ($NA <= 55))
							D
							@elseif(($NA >= 0) && ($NA <= 45))
							E
							@endif
						</td>
					</tr>
					@endfor
	            </table>
	          </div>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection

