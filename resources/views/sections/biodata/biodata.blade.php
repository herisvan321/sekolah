@extends('layouts.template')
@section('main')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Biodata</h3>
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
              <div class="">
              	<div class="col-md-2">
              		<div class="avatar" style="background-color:#9e9e9e; border-radius:50%; color:#eeeeee; font:bold 38px / 100px Helvetica, Arial, sans-serif; height:96px; text-align:center; vertical-align:middle; width:96px; "><a class="" href="">TAZ</a></div>
              	</div>
              	<div class="col-md-10">
              		<h4>TJUT AQILA ZAHWA</h4>

					<p>NIS : 11855<br />
					NISN : 0000011855<br />
					Rombel: X IBB 1</p>
              	</div>
                               
	                <div class="panel panel-default tabs" >        
	                <br><br>                    
	                    <ul class="nav nav-tabs ">
	                        <li class="active"><a href="#tab-data-diri" role="tab" data-toggle="tab">Data Pribadi</a></li>
	                        <li><a href="#tab-tempat-tinggal" role="tab" data-toggle="tab">Tempat Tinggal</a></li>
	                        <li><a href="#tab-riwayat-kesehatan" role="tab" data-toggle="tab">Riwayat kesehatan</a></li>
	                        <li><a href="#tab-riwayat-pendidikan" role="tab" data-toggle="tab">Riawayat pendidikan</a></li>
	                        <li><a href="#tab-orangtua-wali" role="tab" data-toggle="tab">Orang tua/wali</a></li>
	                        <li><a href="#tab-kegemaran" role="tab" data-toggle="tab">Kegemaran</a></li>
	                        <li><a href="#tab-perkembangan" role="tab" data-toggle="tab">Perkembangan</a></li>
	                    </ul>                            
	                    <div class="panel-body tab-content">
	                        <div class="tab-pane active" id="tab-data-diri">
	                           <p align="center">Data Pribadi</p>
	                        </div>
	                        <div class="tab-pane" id="tab-tempat-tinggal">
	                            <p>Tempat Tinggal</p>
	                        </div>
	                        <div class="tab-pane" id="tab-riwayat-kesehatan">
	                            <p>Riwayat kesehatan</p>
	                        </div>
	                        <div class="tab-pane" id="tab-riwayat-pendidikan">
	                            <p>Riwayat Pendidikan</p>
	                        </div>
	                        <div class="tab-pane" id="tab-orangtua-wali">
	                            <p>orang tua/wali</p>
	                        </div>
	                        <div class="tab-pane" id="tab-kegemaran">
	                            <p>Kegemaran</p>
	                        </div>
	                        <div class="tab-pane" id="tab-perkembangan">
	                            <p>Perkembangan</p>
	                        </div>
	                    </div>
	                </div>                                                   
	                <!-- END TABS --> 
              </div>
              <br><br>
            </div>
            </div>
        </div>
      
    </div>
    </div>
  </div>

@endsection