<div class="modal fade" id="posted" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Thông báo</h4>
			</div>
		
			<div class="modal-body">
				<?php if($_GET['posted'] == 1) {?>
					<p>Bài viết đã được đăng!</p>
				<?php } else {?>
					<p>Xảy ra lỗi khi đăng bài!</p>
				<?php }?>
			</div>
	
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">OK</button>
			</div>
		</div>
	</div>
</div>

<?php
	if(isset($_GET['posted'])) {?>
		<script>
			$(window).load(function(){
				$('#posted').modal('show');
    		});
    	</script>
	<?php }
?>