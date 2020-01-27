@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Inventarisasi</h3>
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
	           	<div class="row">
	           		<div class="col-md-12">
	           			<label>Nama Barang</label>
	            	    <input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
	           		</div>
	           		<div class="col-md-12">
	           			<label>Kategory Barang</label>
			           	<select class="form-control" required="required" name="kategory">
			           		<option value="">--pilih--</option>
			           	</select>
	           		</div>
	           		<div class="col-md-3">
	           			<label>Merk / Model</label>
	            		<input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
	           		</div>
	           		<div class="col-md-3">
	           			<label>Ukuran Spesifikasi</label>
	            		<input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
	           		</div>
	           		<div class="col-md-3">
	           			<label>Tanggal Pembelian</label>
	            		<input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
	           		</div>
	           		<div class="col-md-3">
	           			 <label>Jumalah barang</label>
				         <input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
				    </div>
				    <div class="col-md-6">
				    	<label>Harga Beli/ satuan (Rp)</label>
	            		<input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
				    </div>
				    <div class="col-md-6">
				    	<label>Jumlah harga beli</label>
	            		<input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
				    </div>
				    <label class="col-md-12">Kondisi Barang</label>
				    <div class="col-md-4">
	            		<label>Baik</label>
	            		<input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
	            	</div>
	            	<div class="col-md-4">
	            		<label>Kurang baik</label>
	            		<input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
	            	</div>
	            	<div class="col-md-4">
	            		<label>Rusak</label>
	            		<input type="text" name="nama_barang" class="form-control" placeholder="Enter nama barang">
	            	</div>
	           	</div>
	            <br>
	            
	            <br>
 	   			<input type="submit" value="Submit" class="btn btn-primary">
	          </div>
	         
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection