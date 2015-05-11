<!doctype html>
<html>
<head>
<?php 
include("config/head.php");
include("/config/connect.php");
?>
<title>Bookery | Phân loại sách</title>
</head>
<body>
	<?php include("config/header.php");?>
	<div class="col-md-3"></div>
	<div class="col-md-6 post" style="padding-bottom:20px;margin-bottom:20px">
		<h1 align="center">CÁCH PHÂN LOẠI SÁCH</h1>
		<div style="padding-left:20px">
			<p>Hệ thống Phân loại sách theo chất lượng của&nbsp<strong>bookerie?!</strong> tương tự như hệ thống của eBay.</p>
			<br>
			<dl>
				<dt>Hoàn toàn mới</dt>
				<dd>Chưa được đọc và sử dụng</dd>
				<dd>Chất lượng hoàn hảo tuyệt đối, không bị hư hại</dd>
				<dd>Còn dấu hiệu của nhà xuất bản</dd>
				<br>
				<dt>Như mới</dt>
				<dd>Sách đã qua sử dụng nhưng vẫn còn mới cả trong lẫn ngoài</dd>
				<br>
				<dt>Rất tốt</dt>
				<dd>Sách mới bên ngoài nhưng có một vài dấu vết đã qua sử dụng không đáng kể bên trong</dd>
				<dd>Sách có thể có các dấu vết sau:</dd>
				<dd>- Chữ ký</dd>
				<dd>- Tên của người sử dụng trước</dd>
				<dd>- Gạch chân ít hơn 10% số trang</dd>
				<dd>- Đánh dấu ít hơn 10% số trang</dd>
				<dd>- Tem của cơ quan hay thư viện</dd>
				<br>
				<dt>Tốt</dt>
				<dd>Sách bị mất bìa rời</dd>
				<dd>Bìa bị nhàu, gấp nếp</dd>
				<dd>Một số ít trang bị nhàu, gấp nếp hay rách</dd>
				<dd>Không bị mất trang</dd>
				<br>
				<dt>Chấp nhận được</dt>
				<dd>Bìa bị rách</dd>
				<dd>Gáy sách bị hư hại</dd>
				<dd>Sách bị gạch chân hay đánh dấu trên 10%</dd>
				<dd>Sách bị trang trí lại</dd>
				<dd>Sách bị sửa đổi do thư viện</dd>
				<br>
				<dt>Rất cũ</dt>
				<dd>Không có bìa</dd>
				<dd>Sách bị mất trang</dd>
				<dd>Sách bị biến màu hay bị hư hại do dính nước</dd>
			</dl>
			<br>
			<p><strong>Nghiêm cấm tuyệt đối việc trao đổi hay mua bán sách giả.</strong></p>
		</div>
		<hr>
		<div align="center">
			<a class="btn btn-default" href="Main.php">Quay lại</a>
		</div>
	</div>
</body>
</html>