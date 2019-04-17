
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Signup to continue</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
	<link rel="icon" href="./images/logo.svg" type="image/svg" sizes="16x16"> 
	<script src="./js/main.js"></script>
</head>
<body>
	<!-- include the main header -->
	<?php
		include "./components/header.php";
		giveMeHeader("");
		require "database/database.php"
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
					<form method="post" name="cForm" class="form" action="signup.php">
						<h1 class="text-center text-primary p1">Signup</h1>
						<!--  -->
						<div class="input-h">
							<label for="">Email</label>
							<input name="email" type="email" required placeholder="Email">
						</div>
						<!--  -->
						<div class="input-h">
							<label for="">Names</label>
							<input name="first_name" type="text" required placeholder="First name">
						</div>
						<div class="input-h">
                            <label for="">Names</label>
                            <input name="last_name" type="text" required placeholder="Last name">
                        </div>
						<!--  -->
						<div class="input-h">
							<label for="">Password</label>
							<input name="password" type="password" required placeholder="Password">
						</div>
						<!--  -->
						<!--  -->
						<div class="input-h">
							<button type="submit" name="submit" class="btn btn-dark">Submit</button>
						</div>
						<!--  -->
					</form>
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

<?php
//handling the form submissions

if(isset($_POST['submit'])){

echo "We are set bro";

$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];


insertUser($firstName,$lastName,$email,$password);

}

?>
