
<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hergesia Hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
<link rel="icon" href="./images/logo.svg" type="image/svg" sizes="16x16">

	<script src="./js/main.js"></script>
</head>
<body>
	<!-- include the main header -->
	<?php
		include "./components/header.php";
		giveMeHeader("home");
	?>
	<!-- do the main stuff in here -->
	<div class="main">
		<!--  -->
		<!-- Main top -->
		<div class="home-top">
			<div class="home-top-ov">
				<div class="container"
				>
					<div style="width:40%" class="wrapper">
						<h1>
							Fancy 300 rooms of different kinds
							at affordable prices
						</h1>
						<p>
							We can also you sell what you have brought from your home country. 
							Let's share culture. 
						</p>
						<a href="./rooms.php" class="btn btn-primary">
							Find Rooms
						</a>
					</div>
					<div style="width:70%" class="wrapper">
						<div style="width:100%" class="col-100 mrl-auto">
						<!--  -->
							<form name="cForm" method="post" class="form" action="index.php">
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
									<button type="submit" name="submit" class="btn btn-dark">Sign in</button>
								</div>
								<!--  -->
							</form>
							
							
							<div class="text-center">
								<p>OR</p>
								<a href="./signup.php" class="btn btn-primary">Sign up</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--  -->
		<!-- want to book? -->
		<!--  -->
		<div class="want-to-book">
			<div class="container">
				<div class="row">
					<div class="col col-30">
						<div>
						<h1>
							Want to book?
						</h1>
						<p>
							We have many facny rooms for you.
							Just choose we secure you wellness.
							CLick below to see the rroms list.
						</p>
						<a href="./rooms.php" class="btn btn-dark">
							Rooms list 
						</a>
						</div>
					</div>
					
					<div class="col col-70">
						<div class="row-images row">
							<div class="col-img" style="background-image:url('./images/Rooms/andrew-neel-1354776-unsplash.jpg')">
								<div class="btn-h">
									<a href="./rooms.php" class="btn btn-dark">Check these</a>
								</div>
							</div>
							<div class="col-img" style="background-image:url('./images/Rooms/christopher-jolly-616571-unsplash.jpg')">
								<div class="btn-h">
									<a href="./rooms.php" class="btn btn-dark">Check these</a>
								</div>
							</div>
							<div class="col-img" style="background-image:url('./images/Rooms/rhema-kallianpur-275251-unsplash.jpg')">
								<div class="btn-h">
									<a href="./rooms.php" class="btn btn-dark">Check these</a>
								</div>
							</div>
							<div class="col-img" style="background-image:url('./images/Rooms/stephen-leonardi-416233-unsplash.jpg')">
								<div class="btn-h">
									<a href="./rooms.php" class="btn btn-dark">Check these</a>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<!--  -->
		<!-- Want to sell -->
		<!--  -->
		<div class="want-to-sell">
			<div class="container">
				<div class="row">
					<div class="col col-70">
						<div>
						<h1>
							We have brought you
						</h1>
						<p>
							Shopping as either a seller or buyer here at Hergesia.
						</p>
						<a href="./shop.php" class="btn btn-primary">
							Visit shop 
						</a>
						<a class="btn btn-outline-primary">
							Sell your product 
						</a>
						</div>
					</div>
				</div>


				<?php
    session_start();
    require "database/database.php";
    $conn = new PDO("mysql:host=$dbServer;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $errMsg ="";

    if(isset($_POST['submit'])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $stmt = $conn->prepare("SELECT*FROM users WHERE email =:email AND password =:password");
        $stmt ->bindParam(':email',$email);
        $stmt ->bindParam(':password', $password);
        $stmt->execute();
        $results = $stmt->fetch();
        if($stmt->rowCount() >= 1 ){
			$_SESSION['email'] = $email;
			echo "am here";
			ob_end_flush();
			header("Location: rooms.php");
    		 die('should have redirected by now');
           
        }else{
            $errMsg = "<p>You are not logged</p>";
        }
    }

    ?>
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
