<div class="row" style="margin-top:20px;">
	<div class="col-sm-12">
		<div class="panel panel-primary">
		  <div class="panel-heading">List Peta</div>
		  <div class="panel-body">
		  	<table id="tbl-list-book" class="display" style="width:100%">
        <thead> 
            <tr>
                <th>#ID</th>
                <th>Peta Name</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(count($books_data) > 0){

                foreach ($books_data as $key => $value) {
                   ?>
                   <tr>
                       <td><?php echo $value->id; ?></td>
                       <td><?php echo strtoupper($value->name); ?></td>
                       <td><?php echo !empty($value->shelf_name) ? $value->shelf_name : "<i>No Shelf</i>"; ?></td>
                       <td><?php echo $value->email; ?></td>
                   </tr>
                   <?php
                }
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>#ID</th>
                <th>Peta Name</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
        </tfoot>
    </table>
		  </div>
		</div>
	</div>
</div>