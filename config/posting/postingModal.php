<div class="modal fade" id="posting" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Đăng tin</h4>
			</div>
		
			<div class="modal-body">
				<p align="center" class="text-primary"><i>Thông tin đánh dấu sao (*) là bắt buộc.</i></p>
				<br>

				<form method="post" action="config/posting/postingProcess.php" enctype="multipart/form-data" id="postingform">
					<div class="form-group">
						<label>*Tên sách:</label>
						<input type="text" class="form-control" id="title" name="title" maxlength="40" placeholder="Nhập tên sách" required autofocus>
					</div>

					<div class="form-group">
						<label>*Chất lượng:</label>
						<select class="form-control" name="quality" id="quality" style="width:auto">
							<option value="1">Mới hoàn toàn</option>
							<option value="2">Như mới</option>
							<option value="3">Rất tốt</option>
							<option value="4">Tốt</option>
							<option value="5">Chấp nhận được</option>
							<option value="6">Rất cũ</option>
						</select>
					</div>

					<div class="form-group">
						<label>*Giá gốc: (đơn vị 1000VND)</label>
						<input type="number" class="form-control" min="0" max="3000" name="oprice" id="oprice" placeholder="Nhập giá gốc" style="width:auto" required>
					</div>

					<div class="form-group">
						<label>*Giá bán: (đơn vị 1000VND)</label>
						<input type="number" class="form-control" min="0" max="3000" name="sprice" id="sprice" placeholder="Nhập giá bán" style="width:auto" required>
					</div>

					<div class="form-group">
						<label>Mô tả:</label>
						<textarea class="form-control" id="des" name="des"  maxlength="1000" placeholder="Mô tả thêm..." style="height:100px;width:100%"></textarea>
					</div>

					<div class="form-group">
						<label>Ảnh:</label>
						<input type="file" name="fileToUpload">
					</div>
				</form>
			</div>
	
			<div class="modal-footer">
				<input type="submit" class="btn btn-custom" form="postingform" value="Đăng tin">
				<button type="button" class="btn btn-default txt-black" data-dismiss="modal" aria-label="Close">Bỏ qua</button>
			</div>
		</div>
	</div>
</div>

<script>
$('#posting').on('shown.bs.modal', function () {
	$('#title').focus()
})
</script>