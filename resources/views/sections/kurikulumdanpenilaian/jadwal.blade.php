@extends('layouts.template')
@section('main')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
       <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">Jadwal</h3>
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
 	   				<h1>Semester 1 (Ganjil)</h1>

					<ul style="list-style-type:square">
						<li>July 15-17 2019: First day of school, beginning of semester, beginning of introduction of school environment for new students, and class administration process.</li>
						<li>17 August 2019: Public holiday (Indonesian Independence Day)</li>
						<li>23-26 September 2019: Mid-term Assessment (adjusted to school programs)</li>
						<li>9 November 2019: Public Holiday (Birthday of the Prophet Muhammad SAW).</li>
						<li>9-13 December 2019: Final Assessment of Odd Semester.</li>
						<li>December 20, 2019: Distribution of Report Books.</li>
						<li>21 December 2019-4 January 2020: Odd Semester Holidays.</li>
						<li>December 25, 2020: Public Holidays (Christmas Day).</li>
					</ul>

					<h1>Semester 2 (Genap)</h1>

					<ul style="list-style-type:square">
						<li>January 6 2020: First Day of School even semester.</li>
						<li>January 25, 2020: Public Holidays (Chinese New Year 2570).</li>
						<li>February 24-26 2020: Mid-term Assessment (adjusted to school programs).</li>
						<li>March 22, 2020: Public Holiday (Isra Mi&#39;raj of the Prophet Muhammad SAW).</li>
						<li>March 23-April 16, 2020: Estimated UASBN SD, UN SMP / SMPLB, UN SMA / SMALB.</li>
						<li>March 25, 2020: Public Holidays (Nyepi Day, Saka Year 1942).&nbsp;</li>
						<li>April 10, 2020: Public Holiday (Death of Jesus the Messiah).</li>
						<li>April 23-25, 2020: Ramadan Holidays</li>
						<li>May 1 2020: Public Holidays (International Labor Day).</li>
						<li>May 7, 2020: Public Holidays (Vesak 2564).</li>
						<li>May 18-May 30, 2020: Estimated Ramadan Holidays</li>
						<li>May 21, 2020: Public Holiday (Ascension of Isa Al-Masih).&nbsp;</li>
						<li>May 24-25 2020: Public Holidays (Idul Fitri Holidays)</li>
						<li>June 1 2020: Public Holiday (Pancasila Birthday)</li>
						<li>June 15-18, 2020: Final Assessment of the Even Semester</li>
						<li>June 26, 2020: Distribution of Report Books</li>
						<li>27 June-11 July 2020: Even Semester Holidays</li>
					</ul>

 	   			</div>
            </div>
        </div>
      
    </div>
		</div>
	</div>
@endsection