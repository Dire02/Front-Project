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
			افزودن محصول
		</h1>
		<form action = "addProduct_controller.php" method = "post">
		<br>
		<input type = "text" id="title" name = "title" placeholder = "عنوان محصول" >
		
		<input list = "durations" type = "search" name = "duration" placeholder="مدت زمان ">
			<datalist id = "durations">
				<option value = "1 month">1 ماهه</option>
				<option value = "3 month">3 ماهه</option>
				<option value = "6 month">6 ماهه</option>
				<option value = "12 month">1 ساله</option>
				<option value = "18 month">18 ماهه</option>
				<option value = "24 month">2 ساله </option>
				<option value = "forever">مادام العمر</option>
			</datalist>
		<br>	
		<textarea id = "discription" name = "discription" placeholder = "توضیحات"></textarea>
		<br>
		<input type = "text" id="price" name = "price" placeholder = "قیمت " >
		<label >تومان </label>

		<input list = "imagesrc" type = "search" name = "imagesrc" class = "input-src" placeholder="تصویر">
			<datalist id = "imagesrc">
				<option value = "assets/images/upload/image1.jpg">Netflix</option>
				<option value = "assets/images/upload/image2.jpg">Spotify</option>
				<option value = "assets/images/upload/image3.jpg">Nord Vpn</option>

			</datalist>

		<button type = "submit" class = "btn btn-filled" name = "submit"onclick = "alert ('با موفقیت انجام شد ')" onclick = "alert ('با موفقیت انجام شد ')">
				<span>
				ثبت محصول
				</span>
				
			</button>
				
			</a>
		</form>
		
		 
	</body>

 
</html>