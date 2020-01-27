<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header w3-blue">
				<h4 class="modal-title">Materi</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{url('/homedosen/proses/group/materi')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
					@csrf
				<div id="London" class="w3-container city">
					<div class="form-group">
						<label>Judul :</label>
						<input type="text" name="judul" placeholder="Enter judul" class="form-control" required>
						
					</div>
					<div class="form-group">
						<label>Type :</label>
						<select class="form-control" name="type" required="required">
							<option value="">--pilih--</option>
							<option value="0">file</option>
							<option value="1">video</option>
						</select>
						
					</div>
					<div class="form-group">
						<label>Deskripsi :</label>
						<textarea name="deskripsi" rows="10" class="form-control" placeholder="Maximal 255 karakter" required maxlength="255"></textarea>
					</div>
					<div class="form-group">
						<label>Upload :</label>
						<input type="file" name="file" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="submit" name="btnfile" class="btn btn-primary">
					</div>
				</form> 
				</div>
			</div>
			<div class="modal-footer w3-blue">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</div>