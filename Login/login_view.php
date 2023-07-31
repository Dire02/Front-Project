<!doctype html>
<html lang= "fa">
	<head>
		<title>Login</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
		
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
	
		<h1>
		<a href="../Home/home_controller.php"><i class = "fa fa-home"></i></a>
		ورود</h1>
		<form action = "login_controller.php" method = "post">
			
			
				<div class="outline-textfield">
				<input type="text" placeholder=" نام کاربری" id="username" name="username"  class="input-outline" required >
				<div class="input-Mainicon" ><i class="fas fa-user"></i></div>
				</div>
				<br>
				
				
					
				<div class="outline-textfield">
				<input type="password" placeholder=" رمز عبور" id="password" name="password" class="input-outline">
				<div class="input-Mainicon" ><i class="fas fa-unlock-alt"></i></div>
				<div class="input-SECicon" >
				<i class="fas fa-eye"  id="IcoPassID"></i></div></div>
				
				<br><br>
		
		
		<button type = "submit" class = "btn btn-filled" name = "submit" >
				<span>
				ورود
				</span>
				
		</button>
			
		<a href = "../templates/gg.html" class = "btn btn-outline">
		<span>
		رمز عبور خود را فراموش کردم 
		</span>
		</a>
				

<br>
		<a href = "../register/register_controller.php" class = "btn btn-text">
		<span>
		ثبت نام
		</span>
		</a>
			
		</form> 
		<script src="assets/components/js/components.js"></script>
	</body>
</html>