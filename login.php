
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login to continue</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
<link rel="icon" href="./images/logo.svg" type="image/svg" sizes="16x16">

	<script src="./js/main.js"></script>
</head>
<body>
    <?php
		try{
			   //Session start
			   session_start();
			   require "database/database.php";
			   $conn = new PDO("mysql:host=$dbServer;dbname=$dbname", $dbusername, $dbpassword);
			   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			   $errMsg ="";
		   
			   if(isset($_POST['submit'])){
				   $email = $_POST["email"];
				   $password = $_POST["password"];
				   echo $email;
				   echo $password;
				   $stmt = $conn->prepare("SELECT*FROM users WHERE email =:email AND password =:password");
				   $stmt ->bindParam(':email',$email);
				   $stmt ->bindParam(':password', $password);
				   $stmt->execute();
				   $results = $stmt->fetch();
				   if($stmt->rowCount() >= 1 ){
				       $_SESSION['user_id'] = $results["user_id"];
					   echo "<script>alert('hello you have logged in')</script>";
					   $_SESSION['email'] = $email;
					   header("Location: rooms.php");
						die('should have redirected by now');
		   
				   }else{
					   $errMsg = "<p style='color:red;'>You are not logged</p>";
				   }
			   }
		} catch(PDOException $exc){
			echo "<div class='text-center'>Database connection error.</div>";
		}

    ?>
	<!-- include the main header -->
	<?php
		include "./components/header.php";
		giveMeHeader("");
	?>
	<!-- do the main stuff in here -->
	<div class="main">
		<!--  -->
		<!--  -->
		<!--  -->
		<!-- loop within contact and display them -->
		<div class="container">
			<div class="row">
				<div class="col-50 mrl-auto">
					<form name="cForm" method="post" class="form" action="">
					<h1 class="text-center text-primary p1">Login</h1>
					<!--  -->
					<div class="input-h">
						<label for="">Email</label>
						<input type="email" name="email" required placeholder="Email">
					</div>
					<!--  -->
					<div class="input-h">
						<label for="">Password</label>
						<input type="password" name="password" required placeholder="Password">
					</div>
					<!--  -->
					<!--  -->
					<div class="input-h">
						<button type="submit" name="submit" class="btn btn-dark">Submit</button>
					</div>
					<!--  -->
					</form>
					<p> <?php echo $errMsg ?></p>
				</div>
			</div>
		</div>
		<!--  -->
		<!--  -->
	</div>
	<!--  -->
	<!-- include the main footer -->
	<?php
		include "./components/footer.php";
	?>
	<!--  -->
</body>
</html>





