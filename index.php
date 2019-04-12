
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
				<div class="container">
					<div class="wrapper">
						<h1>
							Fancy 300 rooms of different kinds
							at affordable prices
						</h1>
						<p>
							We can also you sell what you have brought from your home country. 
							Let's share culture. 
						</p>
						<button class="btn btn-primary">
							Find Rooms
						</button>
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
						<button class="btn btn-dark">
							Rooms list 
						</button>
						</div>
					</div>
					
					<div class="col col-70">
						<div class="row-images row">
							<div class="col-img" style="background-image:url('./images/Rooms/andrew-neel-1354776-unsplash.jpg')">
								<div class="btn-h">
									<button class="btn btn-dark">Check these</button>
								</div>
							</div>
							<div class="col-img" style="background-image:url('./images/Rooms/christopher-jolly-616571-unsplash.jpg')">
								<div class="btn-h">
									<button class="btn btn-dark">Check these</button>
								</div>
							</div>
							<div class="col-img" style="background-image:url('./images/Rooms/rhema-kallianpur-275251-unsplash.jpg')">
								<div class="btn-h">
									<button class="btn btn-dark">Check these</button>
								</div>
							</div>
							<div class="col-img" style="background-image:url('./images/Rooms/stephen-leonardi-416233-unsplash.jpg')">
								<div class="btn-h">
									<button class="btn btn-dark">Check these</button>
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
						<button class="btn btn-primary">
							Visit shop 
						</button>
						<button class="btn btn-outline-primary">
							Sell your product 
						</button>
						</div>
					</div>
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
