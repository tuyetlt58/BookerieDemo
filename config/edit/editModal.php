<div class="modal fade" id="edit" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Chỉnh sửa</h4>
			</div>
		
			<div class="modal-body">
				<form method="post" action="" enctype="multipart/form-data" id="editform">
					<div class="form-group">
						<label for="title">Tên sách:</label>
						<input type="text" class="form-control" name="title" id="title" placeholder="Nhập tên sách" required autofocus>
					</div>

					<div class="form-group">
						<label for="quality">Chất lượng:</label>
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
						<label for="oprice">Giá gốc: (đơn vị 1000VND)</label>
						<input type="number" class="form-control" min="0" max="3000" name="oprice" id="oprice" placeholder="Nhập giá gốc" style="width:auto" required>
					</div>

					<div class="form-group">
						<label for="sprice">Giá bán: (đơn vị 1000VND)</label>
						<input type="number" class="form-control" min="0" max="3000" name="sprice" id="sprice" placeholder="Nhập giá bán" style="width:auto" required>
					</div>
					<!--
					<div class="form-group">
						<label for="des">Mô tả:</label>
						<textarea class="form-control" name="des" id="des" placeholder="Mô tả thêm..." style="height:100px;width:100%"></textarea>
					</div>

					<div class="form-group">
						<label>Ảnh:</label>
						<input type="file" name="fileToUpload">
					</div>
					-->
				</form>
			</div>
	
			<div class="modal-footer">
				<input type="submit" class="btn btn-custom" form="editform" value="Lưu thay đổi">
				<button type="button" class="btn btn-default txt-black" data-dismiss="modal" aria-label="Close">Bỏ qua</button>
			</div>
		</div>
	</div>
</div>

<script>
$('#edit').on('show.bs.modal', function (event) {
	$('#title').focus()

	var button = $(event.relatedTarget)
	var postid = button.data('postid')
	var link = "config/edit/editProcess.php?postid=" + postid
	var modal = $(this)
	modal.find('#editform').attr("action",link);
})
</script>

<?php /*
include("config/connect.php");
$sql = "SELECT * FROM posts WHERE id = <script>postid</script>";
echo $sql;
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);

$postid = $_GET["postid"];
$title = $row["name"];
$oprice = $row["oprice"];
$sprice = $row["sprice"];
$quality = $row["quality"];
$des = $row["des"];
//$image = $row["image"];
*/?>