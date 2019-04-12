
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
			giveMePageHeader("Contact us", "With the below form, you can contact us, and we will reach out to you very soon.");
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
						<label for="">Names</label>
						<input type="text" required placeholder="Names">
					</div>
					<!--  -->
					<div class="input-h">
						<label for="">Tel</label>
						<input type="number" required placeholder="Tel">
					</div>
					<!--  -->
					<div class="input-h">
						<label for="">Location</label>
						<input type="text" required placeholder="Location">
					</div>
					<!--  -->
					<div class="input-h">
						<label for="">Message</label>
						<textarea rows="10" type="text" placeholder="Message"></textarea>
					</div>
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
