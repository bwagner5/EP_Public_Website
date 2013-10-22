<?php
	require("login.php");
	if (!$_SESSION['admin']){
	    header("Location: index.php");
		die(); 
	}
?>	
<div class="row-fluid">		
	<div class="span10 offset1">	
		<div class="sectionTitle">Upload File</div>
		<form action="uploadFile.php" method="POST" class="form-inline" enctype="multipart/form-data">
			<fieldset>
				<!-- File Upload -->
				<div class="control-group">
				  <label class="control-label" for="upload"><b>Upload File:</b></label>
				  <div class="controls">
				    <input id="upload"  class="input-file" type="file" name="upload[]" multiple>
				    <!-- File Submit --> 
				    <input type="submit" value="Upload" name="submit" class="btn btn-primary"/>
				  </div>
				</div>
				<!-- File Type -->
                <div class="control-group">
                  <label class="control-label" for="fileType"><b>File Type:</b></label>
                  <div class="controls">
                    <label class="radio inline" for="fileType-0">
                      <input type="radio" name="fileType" id="fileType-0" value="Schedule" checked="checked">
                      Schedule
                    </label>
                    <label class="radio inline" for="fileType-1">
                      <input type="radio" name="fileType" id="fileType-1" value="Pull Sheets">
                      Pull Sheets
                    </label>
                    <label class="radio inline" for="fileType-2">
                      <input type="radio" name="fileType" id="fileType-2" value="Technical Info">
                      Technical Info
                    </label>
                    <label class="radio inline" for="fileType-3">
                      <input type="radio" name="fileType" id="fileType-3" value="Manual">
                      Manual
                    </label>
                    <label class="radio inline" for="fileType-4">
                      <input type="radio" name="fileType" id="fileType-4" value="Misc">
                      Miscellaneous
                    </label>
                  </div>
                </div>
			</fieldset>
		</form>
	</div>
</div>
<div class="row-fluid">
    <div class="span10 offset1">
        <div class="sectionTitle">Add Employee Contact</div>
    	<form action="editContacts.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <fieldset>
                <!-- Contact Name-->
                <div class="control-group">
                  <label class="control-label" for="contactName">Contact Name</label>
                  <div class="controls">
                    <input id="contactName" name="contactName" type="text" placeholder="" class="input-large" required="">
                  </div>
                </div>
                <!-- Contact Email-->
                <div class="control-group">
                  <label class="control-label" for="">Contact Email</label>
                  <div class="controls">
                    <input id="contactEmail" name="contactEmail" type="text" placeholder="" class="input-medium" required="">
                  </div>
                </div>
                <!-- Contact Phone-->
                <div class="control-group">
                  <label class="control-label" for="contactNumber">Contact Number</label>
                  <div class="controls">
                    <input id="contactPhone" name="contactPhone" type="text" placeholder="" class="input-medium" required="">
                    <!-- Schedule Submit --> 
                    <input type="submit" value="Add" name="submit" class="btn btn-primary"/>
                  </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<div class="row-fluid">
    <div class="span10 offset1">
        <div class="sectionTitle">Delete Employee Contact</div>
    	<form action="editContacts.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <fieldset>
                <!-- Contact Name-->
                <div class="control-group">
                  <label class="control-label" for="contactName">Contact Name</label>
                  <div class="controls">
                    <input id="contactName" name="contactName" type="text" placeholder="" class="input-large" required="">
                    <input type="submit" value="Delete" name="submit" class="btn btn-primary"/>
                  </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>