
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
					<form name="cForm" class="form" action="">
					<h1 class="text-center text-primary p1">Login</h1>
					<!--  -->
					<div class="input-h">
						<label for="">Email</label>
						<input type="email" required placeholder="Email">
					</div>
					<!--  -->
					<div class="input-h">
						<label for="">Password</label>
						<input type="password" required placeholder="Password">
					</div>
					<!--  -->
					<!--  -->
					<div class="input-h">
						<button class="btn btn-dark">Submit</button>
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
