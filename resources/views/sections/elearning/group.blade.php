@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Group</h3>
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
	            <div class="container-fluid">
	            	<div class="form-group w3-padding w3-light-grey ">
	            	Nama Group : Nama Group<br>
					PIN Group : <span class="w3-green">21elkmds</span>
					<br>
					Deskripsi : ini adalah description dari sebuah group yang anda masuki!
					</div>
					<div class="w3-card" style="padding:10px;">
					<form  action="{{url('homemahasiswa/save/posting')}}" method="post">
					 @csrf
					    <input type="text" class="form-control"  placeholder="Apa yang anda pikirkan?" name="posting" style="margin-bottom:5px;" required>
					    <input type="hidden" name="id_group" value="" >
					    <button type="submit" class="btn btn-primary">posting</button>
				  	</form> 
				  	</div> 
				  	@for($i = 1; $i<=7; $i++)
				  	 <div class="w3-container w3-card w3-white w3-round w3-margin-bottom w3-margin-top"><br>
				        
				        <span class="w3-right w3-opacity">01-01-2020</span>
				        <h4>Nama Yang posting</h4>
				        <hr class="w3-clear">
				        <p>ini adalah isi posting anda</p>
				        <!--<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
				        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> -->
				      </div> 
				      @endfor
				  	 
	            </div>
	          </div>
 	   			<div class=" col-md-3">
 	   				<lable>Aktifkan pertemuan :</label>
					<form action="{{url('/homedosen/view/proses/group/aktifpertemuan')}}" method="post" accept-charset="utf-8">@csrf
						<table border="1">
							<td>
								<select name="pilih" class="form-control">
								@for($i = 1; $i <= 16; $i++)
									<option value="{{$i}}">pertemuan ke {{$i}}</option>
								@endfor
								</select>
								<input type="hidden" name="id_group" value="">
							</td>
							<td>
								<button class="btn btn-primary" type="submit"><i class="fa fa-send-o "></i></button>
							</td>
						</table>
					</form>
					<label>Pertemuan</label>
				    @for($i = 1; $i <= 16; $i++)
					<a  href="{{ url('/homeAdmin/pertemuan-group/e-learning') }}"  class="btn btn-info btn-block">pertemuan ke {{$i}}</a>
					@endfor
 	   			</div>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection

