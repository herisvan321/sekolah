@extends('layouts.template')
@section('main')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">View Buku</h3>
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

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i> Buku
              </button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-importdatatsiswa">
                <i class="fa fa-plus"></i> Import Buku
              </button><br><br>
              <table id="example1" class="table table-bordered table-striped">
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
                    <a  class="btn btn-default" data-id="1" href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal'>Edit</a>
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
                    <a href="#" class="btn btn-default" data-id="2">Edit</a>
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
                    <a href="#" class="btn btn-default">Edit</a>
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
                    <a href="#" class="btn btn-default">Edit</a>
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
                    <a href="#" class="btn btn-default">Edit</a>
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
                    <a href="#" class="btn btn-default">Edit</a>
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
                    <a href="#" class="btn btn-default">Edit</a>
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
                    <a href="#" class="btn btn-default">Edit</a>
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
                    <a href="#" class="btn btn-default">Edit</a>
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
                    <a href="#" class="btn btn-default">Edit</a>
                  </td>
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
      
    </div>
    </div>
  </div>

<div class="modal fade" id="modal-default" style="display: none;">
  <div class="modal-dialog">
    <form action="{{url('/home/input/siswa')}}" method="post">
      @csrf
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Input data Buku</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
       <div class="col-md-12">
    	<div class="container-fluid">
    		<div class="col-md-12">
    		<label >Kode Buku</label>
    		<input type="text" name="kodebuku" class="form-control" placeholder="Enter kode buku" required="required">
    		</div>
    		<div class="col-md-12">
    		<label >Judul Buku</label>
    		<input type="text" name="judulbuku" class="form-control" placeholder="Enter judul buku" required="required">
    		</div>
    		<div class="col-md-12">
    		<label >Pengarang</label>
    		<input type="text" name="pengarang" class="form-control" placeholder="Enter Pengarang" required="required">
    		</div>
    		<div class="col-md-8">
    		<label >Penerbit</label>
    		<input type="text" name="penerbit" class="form-control" placeholder="Enter penerbit" required="required">
    		</div>
	        <div class="col-md-4">
	        <label >tahun terbit</label>
	        <input type="text" name="tahunterbit" class="form-control" placeholder="Enter tahun terbit" required="required">
	        </div>
    		<div class="col-md-4">
	        <label >Jumlah</label>
	        <input type="number" name="jumlah" class="form-control" placeholder="Enter jumlah buku" required="required">
	        </div>
    		<div class="col-md-8">
    		<label >cover buku</label>
    		<input type="file" name="cover" class="form-control" required="required">
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
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-importdatatsiswa" style="display: none;">
  <div class="modal-dialog">
  <form method="post" action="{{ url('/home/import/siswa') }}" enctype="multipart/form-data">
    @csrf
       <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Import data Siswa</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
       <div class="col-md-12">
          <label>Inport data</label>
        <input type="file" name="file" class="form-control">
        <span style="color:red"><i>* Import data menggunakan Format Exel(CSV)</i></span><br>
        Download Example Terbaru <a href="{{ url('/home/export/siswa') }}">disini <i class="fa  fa-download"></i></a><br><br>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
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


