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
                <div class="row">
                	<div class="col-md-6">
                		<table class="table table-bordered">
		                	<tr>
		                		<td>
		                			Username
		                		</td> 
		                		<td>
		                			: aa
		                		</td>
		                	</tr>
		                	<tr>
		                		<td>
		                			Account-ID
		                		</td> 
		                		<td>
		                			: SW00001
		                		</td>
		                	</tr>
		                	<tr>
		                		<td>
		                			E-mail
		                		</td> 
		                		<td>
		                			: gmail@gmail.com
		                		</td>
		                	</tr>
		                	<tr>
		                		<td>
		                			Password Baru
		                		</td> 
		                		<td>
		                			<input type="text" name="" class="form-control">
		                		</td>
		                	</tr>
		                </table>
                	</div>
                </div>
              </div>

            </div>
        </div>
      
    </div>
    </div>
  </div>

@endsection