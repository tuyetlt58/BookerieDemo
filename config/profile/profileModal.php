<!-- Profile modal -->
<div class="modal fade" id="profile" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Thông tin cá nhân</h4>
			</div>
		
			<div id="profilebody" class="modal-body"></div>
	
			<div class="modal-footer">
				<button type="button" onclick="editprofile()" class="btn btn-custom">Chỉnh sửa</a>
				<button type="button" class="btn btn-default txt-black" data-dismiss="modal" aria-label="Close">Bỏ qua</button>
			</div>
		</div>
	</div>
</div>

<script>
// Get data after showing profile modal
$('#profile').on('show.bs.modal', function (event) {
	var string = "config/profile/profileProcess.php";
	$("#profilebody").load(string);
})

// Hide profile modal, then show editProfile modal
function editprofile() {
	$('#profile').modal('hide');
	$('#editprofile').modal('show');
}
</script>