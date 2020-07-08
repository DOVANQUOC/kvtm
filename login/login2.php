<?php

ob_start();
include "../language/config.php";
?>
<html>
<head>
	<title><?php   echo $lang['dangnhap']?></title>
	<meta charset="utf-8">
	<style type="text/css">
		h2{text-align: center;color: red}
		body{
			margin: 0;
			padding: 0;
			background: #FAFAD2;
		}
		.box{
			width: 400px;
			padding: 40px;
			position: absolute;
			top: 50%;
			left:50%;
			transform: translate(-50%,-50%);
			background: #ff6600;
			text-align: center;
			
		}
		.box input[type="text"], .box input[type="password"]{
			border: 0;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid #3333ff;
			padding: 14px 10px;
			width: 200px;
			outline: none;
			color: white;
			border-radius:30px; 
			transition: 0.25s;
		}
		.box h1{
			text-transform: uppercase;
			color: #ff0055;
		}
		
		.box input[type="submit"]{
			border: 0;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid #3333ff;
			padding: 14px 10px;
			width: 100px;
			outline: none;
			color: white;
			border-radius:30px; 
			transition: 0.25s;
		}
		.box input[type="text"]:focus, .box input[type="password"]:focus{
			width: 200px;
			border-color: #00ff00;
		}
		.box input[type="submit"]:hover{
			background: #00ff00;
		}
	</style>
</head>
<body>
<?php
	//Gọi file connection.php ở bài trước
	require_once("connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["dangnhap"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);


		if ($username == "" || $password =="") {
			   echo $lang['loi1'];
		
			
		}else{


			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				 echo $lang['loi2'];
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
			//	$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php

                ///moi them
		$_SESSION['username'] = $username;
    $_SESSION['password'] =$password;
    /////
                header('Location: ../template1.php');
                 exit;
			}
		}
	}
?>
	<form class="box" method="POST" action="login2.php">
	<h1><?php echo $lang['login2']?></h1>
		<input type="text" name="username" placeholder=<?php echo $lang['usn']?> />
		<input type="password" name="password" placeholder=<?php echo $lang['pw']?> />
		<input type="submit" name="dangnhap" value=<?php echo $lang['login3']?> />
  </form>
</body>
</html>