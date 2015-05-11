<!-- Modal avatar -->
<div class="modal fade" id="avatar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Ảnh đại diện</h4>
			</div>
		
			<div id="profilebody" class="modal-body">
				<form method="post" action="config/profile/avatarProcess.php" enctype="multipart/form-data" id="avatarform">
					<div class="form-group">
						<label>Chọn ảnh:</label>
						<input type="file" name="avatar" required>
					</div>
				</form>
			</div>
	
			<div class="modal-footer">
				<input type="submit" class="btn btn-custom" form="avatarform" value="Lưu thay đổi">
				<a href="config/profile/avatarRemove.php" class="btn btn-default txt-black">Xóa ảnh</a>
				<button type="button" class="btn btn-default txt-black" data-dismiss="modal" aria-label="Close">Bỏ qua</button>
			</div>
		</div>
	</div>
</div>

<script>
// // Get data after showing profile modal
// $('#profile').on('show.bs.modal', function (event) {
// 	var string = "config/profile/profileProcess.php";
// 	$("#profilebody").load(string);
// })

// // Hide profile modal, then show editProfile modal
// function editprofile() {
// 	$('#profile').modal('hide');
// 	$('#editprofile').modal('show');
// }
</script>