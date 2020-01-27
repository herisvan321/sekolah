@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Soal Kuis</h3>
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
            	 <p>Bobot Telah Terpenuhi!</p>
				     <form action="{{url('/homedosen/proses/group/kuis')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">{{csrf_field()}}
				     	<div class="form-group">
				     	
				      		<table class="table">
				      			<tr>
				      				<td>
				      					<label>Bobot :</label>
				      					<input type="number" name="bobot" class="form-control" placeholder="bobot yang tersisa : {{100  }}" required>
				      				</td>
				      				<td>
				      					<label>Type</label>
				      					<select class="form-control" name="type" required="required">
				      						<option value="">--pilih--</option>
				      						<option value="0">Objectif</option>
				      						<option value="1">Essay</option>
				      					</select>
				      				</td>
				      			</tr>
				      		</table>
				        </div>
				     	<div class="form-group">
				      	<textarea name="soal" class="ckeditor" id='ckeditor' required></textarea>
				        </div>
				        <div class="form-group">
				      	<input type="submit" name="btnsoal" value="simpan" class="btn btn-primary">
				        </div>
				     </form>
				     <br><br>

				      <div class="row w3-margin-bottom ">
				      	<div class="col-lg-7">
				      		<table class="table table-bordered datatable">
				      			<thead>
					      			<tr>
					      				<td>No Soal</td>
					      				<td>Soal</td>
					      				<td>Bobot</td>
					      				<td>Type</td>
					      				<td>jawaban</td>
					      				<td></td>
					      			</tr>
				      			</thead>
				      			<tbody>
				      			@for($i = 1; $i <= 5 ; $i++)
				      			<tr>
				      				<td>{{ $i }}</td>
				      				<td>Pagi itu hujan lebat mengguyur Kota Bandar Lampung...</td>
				      				<td>20</td>
				      				<td>Essay</td>
				      				<td>5</td>
				      				<td>
				      					<a href="#" class="btn btn-default btn-sm">Edit</a>
				      				</td>
				      			</tr>
				      			@endfor
				      				
				      			</tbody>
				      		</table>
				      	</div>
				      	<div class="col-lg-5">
			      			<h4 class="w3-padding w3-center w3-blue">yang telah melakukan ujian</h4>
			      			<table class="table table-bordered datatable">
			      				<thead>
			      					<tr>
				      					<th>No</th>
				      					<th>Nis</th>
				      					<th>Nama</th>
				      				</tr>
			      				</thead>
			      				<tbody>
				      			@for($j = 1; $j <= 15 ; $j++)
				      				<tr>
				      					<td>{{ $j }}</td>
				      					<td>994949949994</td>
				      					<td>
				      						<a href="{{ url('/homeAdmin/jawaban-kuis/e-learning') }}">Nama Siswa</a>
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