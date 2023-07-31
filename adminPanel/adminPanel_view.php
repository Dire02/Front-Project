<!doctype html>
<html lang= "fa">
	<head>
		<title>افزودن محصول</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
		
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
	
		<h1>
		<a href="../Home/home_controller.php"><i class = "fa fa-home"></i></a>
		پنل ادمین
		
		</h1>
		<form action = "adminPanel_controller.php" method = "post">
		
		<div class="container">
			<p>
			<a href="../UserListTable/UserListTable_controller.php" class="btn btn-filled">لیست کاربران</a>
			
			<a href="../productListTable/productListTable_controller.php" class="btn btn-filled">لیست محصولات</a>
			
			<a href="../messageListTable/messageList_controller.php" class="btn btn-filled">لیست پیام ها </a>
			
			<a href="../addProduct/addProduct_controller.php" class="btn btn-filled">افزودن محصول</a>
			</p>
		</div>

			
		

		</form>
		
		 
	</body>

 
</html>