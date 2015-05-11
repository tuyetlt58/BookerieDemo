<?php if($_SESSION['userid'] != 0) {?>
	<!-- Da dang nhap -->
	<button type="button" class="btn btn-lg btn-block btn-custom" style="margin-bottom:10px" data-toggle="modal" data-target="#posting"><strong>ĐĂNG TIN</strong></button>

	<div class="col-md-1 def">
		<a href="Deck.php" class="btn btn-custom">
			<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
		</a>
	</div>

	<div class="col-md-1 def"></div>

	<div class="col-md-10 def">
		<div class="btn-group btn-group-md btn-group-justified" style="margin-bottom:20px">
			<a id="mypost" href="Main.php?state=1" class="btn btn-default no-border">
				Của tôi
			</a>
			<a id="bookmark" href="Main.php?state=2" class="btn btn-default no-border">
				Đánh dấu
			</a>
			<a id="cart" href="Main.php?state=3" class="btn btn-default no-border">
				Đặt gạch
			</a>
		</div>
	</div>
<?php } else {?> 
	<!-- Chua dang nhap -->
	<button type="button" class="btn btn-lg btn-block btn-custom" style="margin-bottom:20px" data-toggle="modal" data-target="#signin"><strong>ĐĂNG TIN</strong></button>
<?php }?>

<!-- Cong cu tim kiem -->
<div class="block">
	<p>Tìm kiếm</p>
	<form method="post" action="Main.php?state=<?php echo $state?>" style="padding:0px;margin-top:10px;width:220px">
		<div class="input-group">
			<input type="search" id="searchbar" name="search" class="form-control" placeholder="Nhập tên sách" value="<?php echo $search_bar;?>" required>
			<span class="input-group-btn">
				<button type="submit" id="searchbutton" class="btn btn-default">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</button>
			</span>
		</div>
	</form>
</div>

<!-- Cong cu sap xep -->
<div class="block">
	<p>Sắp xếp<p>
	<div class="btn-group-md" style="margin-top:10px">
		<button id="sort1"><span class="glyphicon glyphicon-sort" aria-hidden="true" title="Mặc định"></span></button>
		<!-- <a id="sort2" class="btn btn-default"><span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true" title="Tên từ A đến Z"></span></a> -->
		<button id="sort3"><span class="glyphicon glyphicon-sort-by-order-alt" aria-hidden="true" title="Giá từ cao đến thấp"></span></button>
		<button id="sort4"><span class="glyphicon glyphicon-sort-by-order" aria-hidden="true" title="Giá từ thấp đến cao"></span></button>
		<button id="sort5"><span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true" title="Chất lượng từ mới đến cũ"></span></button>
		<button id="sort6"><span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true" title="Chất lượng từ cũ đến mới"></span></button>
	</div>
</div>