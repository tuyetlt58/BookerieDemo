<?php if($_SESSION['userid'] != 0) {?>
	<div class="col-md-1 def">
		<a href="Main.php" class="btn btn-custom">
			<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
		</a>
	</div>

	<div class="col-md-1 def"></div>

	<div class="col-md-10 def">
		<div class="btn-group btn-group-md btn-group-justified" style="margin-bottom:20px">
			<a id="mypost" href="Deck.php?state=1" class="btn btn-default no-border">
				Của tôi
			</a>
			<a id="bookmark" href="Deck.php?state=2" class="btn btn-default no-border">
				Đánh dấu
			</a>
			<a id="cart" href="Deck.php?state=3" class="btn btn-default no-border">
				Đặt gạch
			</a>
		</div>
	</div>
<?php }