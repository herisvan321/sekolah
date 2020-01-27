@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Kalender Akademik</h3>
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
	            <label>Judul</label>
	            <input type="text" name="judul" class="form-control" placeholder="Enter Judul">
	            <label>Description</label>
	            <textarea class="ckeditor" name="description"></textarea>
	            <br>
 	   			<input type="submit" value="Submit" class="btn btn-primary">
	          </div>
 	   			<div class=" col-md-12">
 	   				<br><br>
 	   				<h3>Review</h3>
 	   				<table class="table table-bordered datatable">
              <thead>
 	   					<tr>
 	   						<th>No</th>
 	   						<th>Periode</th>
 	   						<th>Judul</th>
 	   						<th>Kalender</th>
 	   						<th></th>
 	   					</tr>
              </thead>
              <tbody>
 	   					<tr>
 	   						<td>1</td>
 	   						<td>2020/2021</td>
 	   						<td>Kalender Akademik TH. 2020/2021</td>
 	   						<td><a href="#" target="_blank">Lihat</a></td>
 	   						<td>
 	   							<a href="#" class="btn btn-default">Edit</a>
 	   						</td>
 	   					</tr>
 	   					<tr>
 	   						<td>2</td>
 	   						<td>2019/2020</td>
 	   						<td>Kalender Akademik TH. 2019/2020</td>
 	   						<td><a href="#" target="_blank">Lihat</a></td>
 	   						<td>
 	   							<a href="#" class="btn btn-default">Edit</a>
 	   						</td>
 	   					</tr>
 	   					<tr>
 	   						<td>3</td>
 	   						<td>2018/2019</td>
 	   						<td>Kalender Akademik TH. 2018/2019</td>
 	   						<td><a href="#" target="_blank">Lihat</a></td>
 	   						<td>
 	   							<a href="#" class="btn btn-default">Edit</a>
 	   						</td>
 	   					</tr>
 	   					<tr>
 	   						<td>4</td>
 	   						<td>2017/2018</td>
 	   						<td>Kalender Akademik TH. 2017/2018</td>
 	   						<td><a href="#" target="_blank">Lihat</a></td>
 	   						<td>
 	   							<a href="#" class="btn btn-default">Edit</a>
 	   						</td>
 	   					</tr>
 	   					<tr>
 	   						<td>5</td>
 	   						<td>2016/2017</td>
 	   						<td>Kalender Akademik TH. 2016/2017</td>
 	   						<td><a href="#" target="_blank">Lihat</a></td>
 	   						<td>
 	   							<a href="#" class="btn btn-default">Edit</a>
 	   						</td>
 	   					</tr>
 	   					<tr>
 	   						<td>6</td>
 	   						<td>2015/2016</td>
 	   						<td>Kalender Akademik TH. 2015/2016</td>
 	   						<td><a href="#" target="_blank">Lihat</a></td>
 	   						<td>
 	   							<a href="#" class="btn btn-default">Edit</a>
 	   						</td>
 	   					</tr>
 	   					<tr>
 	   						<td>7</td>
 	   						<td>2014/2015</td>
 	   						<td>Kalender Akademik TH. 2014/2015</td>
 	   						<td><a href="#" target="_blank">Lihat</a></td>
 	   						<td>
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