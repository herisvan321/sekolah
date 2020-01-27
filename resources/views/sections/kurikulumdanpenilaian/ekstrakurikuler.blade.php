@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Eksrakurikuler</h3>
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
 	   				<a href="#" class="btn btn-default">Edit</a>
 	   				<p>SMK NEGERI 7 SEMARANG, atau orang sering menyebutnya STM PEMBANGUNAN SEMARANG (<strong>STEMBA).</strong>&nbsp;Ini merupakan sekolah kejuruan yang terkenal dengan kedisiplinan dan juga karakter siswa yang baik. Sekolah ini berdiri pada tahun 1971 sampai sekarang, telah mencapai banyak prestasi dan pengargaan baik di bidang akademik maupun non akademik. Untuk kali ini, akan dibahas beberapa prestasi non akademik yang telah dicapai STEMBA. Tentu dibalik pencapaian nya tersebut pasti ada komunitas didalam sekolah atau yang sering kita sebut dengan ekstrakulikuler.<br />
					<br />
					Beberapa Ekstrakulikuler di STEMBA antara lain :<br />
					<br />
					1. PASKIBRA<br />
					2. PRAMUKA (Ambalan Ir. Soekarno dan Fatmawati<br />
					3. Band (Stemba Band)<br />
					4. Paduan Suara (Bahana Muda Stemba)<br />
					5. Argapeta (Pecinta Alam)<br />
					6. Karawitan<br />
					7. Rohis<br />
					8. Stemba English Club (B.inggris)<br />
					9. Senaka (bahasa jepang)<br />
					10. Sawaji (bahasa Indonesia)<br />
					11. Volly<br />
					12. Basket<br />
					13. Futsal<br />
					14. Seni tari<br />
					15. Seni musik</p>


 	   			</div>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection