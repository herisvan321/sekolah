@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Jawaban Kuis</h3>
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
            	Nama : <br>
				Nis : 
				<hr>
				@php($no = 1)
				<form action="{{url('/homedosen/proses/kuis/jawaban/mahasiswa')}}" method="post">{{csrf_field()}}
				<table border="0">
				<tr>
					<td>
						<input type="submit" class="btn btn-success"  value="simpan" name="btnsimpan">
					</td>
				</tr>
				<tr>
					<td ><b>No</b></td>
					<td><b>Soal</b></td>
				</tr>
				@for($i = 1; $i <= 5; $i++)
					<tr>
						<td style="width:50px;" valign="top">{{ $i }}</td>
						<td>
							Teks 1

							Pagi itu hujan lebat mengguyur Kota Bandar Lampung, Lampung. Hujan yang terjadi mulai pukul 04.30 WIB tadi membuat jalan menuju Stasiun Tanjung Karang, tepatnya Jalan Raden Intan, terendam banjir. Pada malam hari genangan air setinggi sekitar 40 cm mengakibatkan kemacetan cukup panjang.

							Teks 2

							Ribuan rumah terendam banjir bandang di tiga kecamatan di Kabupaten Banggai, Provinsi Sulawesi Tengah. Para korban mengungsi ke daerah yang lebih aman. Kondisi itu terjadi pada Minggu pukul 03.00 WITA

							Perbedaan pola penyajian kedua teks tersebut adalah....
						</td>
					</tr>
					<tr>
						<td></td>
						<td><b>jawaban</b></td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							Pagi itu hujan lebat mengguyur Kota Bandar Lampung, Lampung. Hujan yang terjadi mulai pukul 04.30 WIB tadi membuat jalan menuju Stasiun Tanjung Karang, tepatnya Jalan Raden Intan, terendam banjir. Pada malam hari genangan air setinggi sekitar 40 cm mengakibatkan kemacetan cukup panjang.
						</td>
					</tr>
					<tr>
						<td></td>
						<td><b>Nilai</b></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" name="nilai[]" class="form-control" placeholder="bobot 20" required>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><hr></td>
					</tr>
					@endfor
					<tr>
						<td>
							<input type="submit" class="btn btn-success"  value="simpan" name="btnsimpan">
						</td>
					</tr>
				</form>
				</table>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection