<div class="row-fluid">		
	<div class="span10 offset1">	
		<div class="sectionTitle">Admin Settings</div>
		<form action="uploadSchedule.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
			<fieldset>
				<!-- Schedule Upload --> 
				<div class="control-group">
				  <label class="control-label" for="upload"><b>Upload Schedule:</b></label>
				  <div class="controls">
				    <input id="upload" name="upload" class="input-file" type="file">
				    <!-- Schedule Submit --> 
				    <input type="submit" value="Upload" name="submit" class="btn btn-primary"/>
				  </div>
				</div>
			</fieldset>
		</form>
	</div>
</div>