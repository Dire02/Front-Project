<!doctype html>
<html lang = "fa">
	<head>
		<title>UserList</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css">
		<style>
		</style>
	</head>
	<body class = "container">
        <h1>
		<a href="../Home/home_controller.php"><i class = "fa fa-home"></i></a>
		لیست کاربران</h1>
		<div class= "">
			<table class = "datatable">
			<tr>
			<th>
				<input type='checkbox'>
			</th>
			<th>	
				شناسه کاربر
			</th>
			<th>	
				نام کاربر
			</th>
			<th>	
				پسورد کاربر 
			</th>
			<th>	
				جنسیت 
			</th>
			<th>	
				ایمیل
			</th>
			<th>	
				سطح دسترسی
			</th>
			</tr>
			<?php
			foreach( $productList as $product ){
				include 'templates/UserListTable.php';
			}
			?>
			</table>








		</div>
	</body>
</html>