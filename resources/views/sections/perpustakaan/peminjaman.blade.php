@extends('layouts.template')
@section('main')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Peminjaman Buku</h3>
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
            <table id="example1" class="table table-bordered table-striped datatable">
                <thead>
                <tr>
                  <th>No</th>
                  <th>kode buku</th>
                  <th>Judul Buku</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>tahun terbit</th>
                  <th>Jumlah Buku</th>
                  <th>cover</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>BK00001</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                  
                </tr>
                <tr>
                  <td>2</td>
                   <td>BK00002</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                   <td>BK00003</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                   <td>BK00004</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                   <td>BK00005</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                   <td>BK00006</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                   <td>BK00007</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>BK00008</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>BK00009</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>BK00010</td>
                  <td>Ini adalah judul buku</td>
                  <td>Nama Pengarang</td>
                  <td>Penerbit</td>
                  <td>2010</td>
                  <td>10</td>
                  <td>
                    <a href="#">Lihat</a>
                  </td>
                  <td>
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Pinjam</a>
                  </td>
                </tr>
            </tbody>
              </table>
            </div>
        </div>
      
    </div>
    </div>
  </div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="{{url('/home/input/siswa')}}" method="post">
		      @csrf
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">×</span></button>
		        <h4 class="modal-title">Update data Buku</h4>
		      </div>
		      <div class="modal-body">
		      	<div class="row">
		       <div class="col-md-12">
		    	<div class="container-fluid">
		    		<div class="col-md-12">
		    		<label >Kode Buku</label>
		    		<input type="text" name="kodebuku" class="form-control" placeholder="Enter kode buku" required="required" readonly="readonly">
		    		<!-- <select class="form-control select" data-live-search="true">
                        <option>Lorem ipsum dolor</option>
                        <option>Sit amet sicors</option>
                        <option>Mostoly stofu tiro</option>
                        <option>Vico sante fara</option>
                        <option>Delomo ponto si</option>
                    </select> -->
		    		</div>
		    		<div class="col-md-12">
		    		<label >Judul Buku</label>
		    		<input type="text" name="judulbuku" class="form-control" placeholder="Enter judul buku" required="required" readonly="readonly">
		    		</div>
		    		<div class="col-md-12">
		    		<label >Pengarang</label>
		    		<input type="text" name="pengarang" class="form-control" placeholder="Enter Pengarang" required="required" readonly="readonly">
		    		</div>
		    		<div class="col-md-8">
		    		<label >Penerbit</label>
		    		<input type="text" name="penerbit" class="form-control" placeholder="Enter penerbit" required="required" readonly="readonly">
		    		</div>
			        <div class="col-md-4">
			        <label >tahun terbit</label>
			        <input type="text" name="tahunterbit" class="form-control" placeholder="Enter tahun terbit" required="required" readonly="readonly">
			        </div>
			        <div class="col-md-12">
			        <label >Jumlah</label>
			        <input type="number" name="jumlah" class="form-control" placeholder="Enter jumlah buku" required="required" readonly="readonly">
			        </div>
		    		<div class="col-md-12">
		    			<label>Nis Siswa</label>
		    			<input type="number" name="nis" class="form-control" placeholder="Enter Nis Siswa" required="required" >
		    		</div>
		    		<div class="col-md-12">
		    			<label>Nama Siswa</label>
		    			<input type="text" name="namasiswa" class="form-control" placeholder="Enter Nama Siswa" required="required"  readonly="readonly">
		    		</div>
		    		<div class="col-md-12">
		    			<label>Kelas</label>
		    			<input type="text" name="kelas" class="form-control" placeholder="Enter Kelas" required="required"  readonly="readonly">
		    		</div>
		    		<div class="col-md-12">
		    			<label>Jumlah Pinjam</label>
		    			<input type="number" name="jumlah pinjam" class="form-control" placeholder="Enter jumlah Pinjam" required="required" >
		    		</div>
		    		<span style="color:red"><i>* isi data dengan Benar</i></span>
		    		<br><br>
		    	</div>
		        </div>
		        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </form>
    </div>
</div>
 <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            // $.ajax({
            //     type : 'post',
            //     url : 'detail.php',
            //     data :  'rowid='+ rowid,
            //     success : function(data){
            //     $('.fetched-data').html(data);//menampilkan data ke dalam modal
            //     }
            // });
            $('.fetched-data').html(rowid);
         });
    });
  </script>
@endsection