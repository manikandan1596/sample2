$(document).ready(function(){
	showTable();

	//add
	$('#add').click(function(){
		$('#addnew').modal('show');
		$('#addForm')[0].reset();
	});

	$('#addbutton').click(function(){
		var user = $('#user').val();
		var dob = $('#dob').val();
		var address = $('#address').val();
		var qual = $('#qual').val();
		var design = $('#design').val();
		if(user!='' && dob!=='' && address!=='' && qual!=='' && design!==''){
			var addForm = $('#addForm').serialize();
			$.ajax({
				type: 'POST',
				url: 'add.php',
				data: addForm,
				success:function(){
					$('#addnew').modal('hide');
					$('#addForm')[0].reset();
					showTable();
					$('#alert').slideDown();
					$('#alerttext').text('USER Added Successfully');
				}
			});
		}
		else{
			alert('Please input all Fields')
		}
		
	});
	//
	//edit
	$(document).on('click', '.edit', function(){
		var memid = $(this).data('id');
		var user = $('#user'+memid).text();
		var dob = $('#dob'+memid).text();
		var address = $('#address'+memid).text();
		var qual = $('#qual'+memid).text();
		var design = $('#design'+memid).text();
		$('#editmem').modal('show');
		$('#euser').val(user);
		$('#edob').val(dob);
		$('#eaddress').val(address);
		$('#equal').val(qual);
		$('#edesign').val(design);
		$('#editbutton').val(memid);
	});

	$('#editbutton').click(function(){
		var memid = $(this).val();
		var editForm = $('#editForm').serialize();
		$.ajax({
			type: 'POST',
			url: 'edit.php',
			data: editForm + "&memid="+memid,
			success:function(){
				$('#editmem').modal('hide');
				$('#editForm')[0].reset();
				showTable();
				$('#alert').slideDown();
				$('#alerttext').text('USER DETAILS Updated Successfully');
			}
		});
	});
	//
	//delete
	$(document).on('click', '.delete', function(){
		var memid = $(this).data('id');
		var user = $('#user'+memid).text();
		$('#delmem').modal('show');
		$('#duser').text(user);
		$('#delbutton').val(memid);
	});

	$('#delbutton').click(function(){
		var memid = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'delete.php',
			data: {
				memid: memid,
			},
			success:function(){
				$('#delmem').modal('hide');
				showTable();
				$('#alert').slideDown();
				$('#alerttext').text('USER DETAILS Successfully');
			}
		});
	});

});

function showTable(){
	$.ajax({
		type: 'POST',
		url: 'fetch.php',
		data: {
			fetch: 1
		},
		success:function(data){
			$('#table').html(data);
		}
	});
}