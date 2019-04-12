
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hergesia Rooms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
<link rel="icon" href="./images/logo.svg" type="image/svg" sizes="16x16">

	<script src="./js/main.js"></script>
</head>
<body>
	<!-- include the main header -->
	<?php
		include "./components/header.php";
		giveMeHeader("rooms");
	?>
	<!-- do the main stuff in here -->
	<div class="main">
		<!--  -->
		<!-- Main top -->
		<?php
			include "./components/page_header.php";
			giveMePageHeader("Rooms", "We can also you sell what you have brought from your home country. 
			Let's share culture. ");
		?>
		<!--  -->
		<!--  -->
		<!-- loop within rooms and display them -->
		<div class="container">
			<div class="row ov-wrap">
					<?php
					$rooms = [
						["./images/Rooms/andrew-neel-1354776-unsplash.jpg", "max Rummer", "300"],
						["./images/Rooms/henry-co-736450-unsplash.jpg", "Height Fuller", "200"],
						["./images/Rooms/justin-docanto-660282-unsplash.jpg", "Tech Filled", "100"],
						["./images/Rooms/christopher-jolly-616571-unsplash.jpg", "Confortable Gang", "130"],
						["./images/Rooms/stephen-leonardi-416233-unsplash.jpg", "Two in One", "80"],
						["./images/Rooms/rhema-kallianpur-275251-unsplash.jpg", "Dizzy Boy", "100"],
					];
					for ($i=0; $i < sizeof($rooms); $i++) { 
						# code...
						?>
							<div style="
							background-image: url('<?php echo $rooms[$i][0]; ?>')
							" class="element room">
								<div class="ov">
									<div class="top">
										16 rooms
										<span class="ml-auto text-primary">book</span>
										<div class="ml-1">
											<button class="btn btn-primary btn-circle-40">+1</button>
										</div>
									</div>
									<div class="bottom">
										<div>
											<h3 class="text-primary"><?php echo $rooms[$i][1]; ?></h3>
											<h3 class="text-primary">$<?php echo $rooms[$i][2]; ?></h3>
										</div>
									</div>
								</div>
							</div>
						<?php
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
