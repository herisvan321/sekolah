@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Nilai Perkelas</h3>
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
						<th rowspan="2"><center>No</center></th>
						<th rowspan="2"><center>Nis</center></th>
						<th rowspan="2"><center>Nama</center></th>
						<th colspan="4"><center>Mata Pelajaran</center></th>
						<th rowspan="2"><center>NA</center></th>
						<th rowspan="2"><center>NH</center></th>
					</tr>
					<tr>
						<td align="center">Bahasa Indonesia</td>
						<td align="center">Bahasa Inggris</td>
						<td align="center">Matematika</td>
						<td align="center">Agama</td>
					</tr>
					@for($j = 1; $j <= 15; $j++)
					<tr>
						<td>{{ $j }}</td>
						<td>9970838</td>
						<td>Nama Siswa</td>

					@php($t = 0 )
					@php($o = 0)
						@for($h = 1; $h <= 4; $h++)
						<td align="center">{{ $o = rand(10,100) }}</td>
						@php($t += $o)
						@endfor
						<td>{{ $NA = $t / 4 }}</td>
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

