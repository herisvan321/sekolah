@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Input Alumni</h3>
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
	            <label>Nama Alumni</label>
	            <input type="text" name="nama" class="form-control">
	            <label>Alumni tahun</label>
	            <input type="text" name="tahun" class="form-control">
	            <label>Pesan dari Alumni</label>
	            <textarea class="ckeditor" name="pesan"></textarea>
	            <label>Foto</label>
	            <input type="file" name="foto" class="form-control">
	            <br><br>
	            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	          </div>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection

