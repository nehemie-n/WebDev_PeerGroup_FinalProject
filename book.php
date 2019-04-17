
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact Hergesia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
<link rel="icon" href="./images/logo.svg" type="image/svg" sizes="16x16">

	<script src="./js/main.js"></script>
</head>
<body>
	<!-- include the main header -->
	<?php
		include "./components/header.php";
		giveMeHeader("contact");
	?>
	<!-- do the main stuff in here -->
	<div class="main">
		<!--  -->
		<!-- Main top -->
		<?php
			include "./components/page_header.php";
			giveMePageHeader("Book the room", "With the below form, you can book a room.");
		?>
		<!--  -->
		<!--  -->
		<!-- loop within contact and display them -->
		<div class="container">
			<div class="row">
				<div class="col-40 mrl-auto">
					<form name="cForm" class="form" action="">
					<!--  -->
					<div class="input-h">
						<label for="">Room</label>
						<select name="room" id="room">
							<option value="max Rummer">max Rummer  $200</option>
							<option value="Height Fuller">Height Fuller   $140</option>
							<option value="Tech Filled">Tech Filled  $100</option>
							<option value="Confortable Gang">Confortable Gang  $130</option>
							<option value="Two in One">Two in One  $80</option>
							<option value="Dizzy Boy">Dizzy Boy $100</option>
						</select>
					</div>
					<!--  -->
					<div class="input-h">
						<label for="number">Number</label>
						<input id="number" max="5" min="0" value="0" type="number" required placeholder="Number">
					</div>
					<!--  -->
					<div class="input-h">
						<label for="">Check in Date</label>
						<input type="date" required placeholder="Check in Date">
					</div>
					<!--  -->
					<div class="input-h">
						<label for="">Check out Date</label>
						<input type="date" required placeholder="Check out Date">
					</div>
					<!--  -->
					<div class="input-h">
						<label for="">Description</label>
						<textarea rows="10" type="text" placeholder="Description"></textarea>
					</div>
					<!--  -->
					<div class="input-h">
						<button class="btn btn-dark">Book</button>
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
