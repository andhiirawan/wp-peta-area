<?php 
 wp_enqueue_media();
?>

<div class="row" style="margin-top:20px;">
	<div class="col-sm-12">
		<div class="panel panel-primary">
		  <div class="panel-heading">Create Peta</div>
		  <div class="panel-body">
		  	<form class="form-horizontal" method="post" action="javascript:void(0)" id="frm-create-book">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="dd_book_shelf">Select Peta Shelf:</label>
			    <div class="col-sm-4">
			      <select class="form-control" required="" name="dd_book_shelf">
			      	<option value="">Choose Shelf</option>
			      	<?php
			      	if(count($book_shelf) > 0){
			      		foreach ($book_shelf as $key => $value) {
			      			?>
			      			<option value="<?php echo $value->id; ?>"><?php echo strtoupper($value->shelf_name); ?></option>
			      			<?php
			      		}
			      	}
			      	?>
			      </select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="txt_name">Peta Name:</label>
			    <div class="col-sm-4">
			      <input type="text" required class="form-control" name="txt_name" id="txt_name" placeholder="Enter Peta Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="txt_email">Latitude</label>
			    <div class="col-sm-4">
			      <input type="text" required class="form-control" name="txt_latitude" id="txt_latitude" placeholder="Enter Peta Latitude">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="txt_email">Longitude</label>
			    <div class="col-sm-4">
			      <input type="text" required class="form-control" name="txt_longitude" id="txt_longitude" placeholder="Enter Peta Longitude">
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-4">
			      <button type="submit" class="btn btn-success">Submit</button>
			    </div>
			  </div>
			</form>
		  </div>
		</div>
	</div>
</div>