<div class="modal fade" id="delete" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Xác nhận</h4>
			</div>
		
			<div class="modal-body">
				<p>Bạn chắc chắn muốn xóa bài viết này?</p>
			</div>
	
			<div class="modal-footer">
				<button id="confirm" onclick="" class="btn btn-danger">Xóa</button>
				<button type="button" class="btn btn-default txt-black" data-dismiss="modal" aria-label="Close">Bỏ qua</button>
			</div>
		</div>
	</div>
</div>

<script>
$('#delete').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget)
	var postid = button.data('postid') 
	var link = "del(" + postid + ")"
	$(this).find('#confirm').attr("onclick",link);
})

function del(postid) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			$('#delete').modal('hide');
			refresh(curstr,curbtn);
		}
	}
	xmlhttp.open("GET","config/delete/deleteProcess.php?postid=" + postid,true);
	xmlhttp.send();
}
</script>