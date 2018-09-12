<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New USER</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="addForm">
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">NAME:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="user" id="user">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">DOB:</label>
						</div>
						<div class="col-md-10">
							<input type="date" class="form-control" name="dob" id="dob">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">ADDRESS:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="address" id="address">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">QUALIFICAION:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="qual" id="qual">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">DESIGNATION:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="design" id="design">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="addbutton" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>

<!-- Edit -->
    <div class="modal fade" id="editmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit USER</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="editForm">
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">NAME::</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="euser" id="euser">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">DOB:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="edob" id="edob">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">ADDRESS:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="eaddress" id="eaddress">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">QUALIFICAION:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="equal" id="equal">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">DESIGNATION:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="edesign" id="edesign">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="editbutton" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Update</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>

<!-- Delete -->
    <div class="modal fade" id="delmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h5><center>USER: <strong><span id="duser"></span></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="delbutton" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </div>
				
            </div>
        </div>
    </div>
