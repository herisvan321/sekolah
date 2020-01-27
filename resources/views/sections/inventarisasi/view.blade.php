@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel ">
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
 	   			<div class=" col-md-12">
 	   				<br>
 	   				<a href="#" class="btn btn-success">Export Excle</a>
 	   				<br><br>

 	   				<table class="table table-bordered">
 	   					<tr>
 	   						<th rowspan="2"><center>No</center></th>
 	   						<th rowspan="2"><center>Nama Barang / Jenis Barang</center></th>
 	   						<th rowspan="2"><center>Merk / Model</center></th>
 	   						<th rowspan="2"><center>Bulan / Tahun Pembelian</center></th>
 	   						<th rowspan="2"><center>Jml Barang</center></th>
 	   						<th rowspan="2"><center>Harga Beli/ satuan (Rp)</center></th>
 	   						<th rowspan="2"><center>Jml Harga Beli</center></th>
 	   						<th colspan="3"><center>Keadaan Barang</center></th>
 	   					</tr>
 	   					<tr>
 	   						<th><center>Baik</center></th>
 	   						<th><center>Kurang Baik</center></th>
 	   						<th><center>Rusak</center></th>
 	   					</tr>
 	   					<tr>
 	   						<th colspan="10">Ruangan Labor Komputer Multimedia (MLD)</th>
 	   					</tr>
 	   					<tr>
 	   						<td>1</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>2</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>3</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>4</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>5</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>6</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>7</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<th colspan="10">Ruangan Labor Komputer (RPL)</th>
 	   					</tr>
 	   					<tr>
 	   						<td>1</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>2</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>3</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>4</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>5</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>6</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>7</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<th colspan="10">Ruangan Labor Komputer (TKJ)</th>
 	   					</tr>
 	   					<tr>
 	   						<td>1</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>2</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>3</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>4</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>5</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>6</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>7</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<th colspan="10">Kantor Penanggung jawab Laboran</th>
 	   					</tr>
 	   					<tr>
 	   						<td>1</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>2</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>3</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>4</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>5</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>6</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					<tr>
 	   						<td>7</td>
 	   						<td>nama barang</td>
 	   						<td>merk</td>
 	   						<td>2010</td>
 	   						<td>jumlah</td>
 	   						<td>harga beli</td>
 	   						<td>keadaan barang</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   						<td>1</td>
 	   					</tr>
 	   					
 	   				</table>

 	   			</div>
 	   			
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection