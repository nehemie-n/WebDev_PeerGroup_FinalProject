
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Hergesia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
<link rel="icon" href="./images/logo.svg" type="image/svg" sizes="16x16">

	<script src="./js/main.js"></script>
</head>
<body>
	<!-- include the main header -->
	<?php
		include "./components/header.php";
		giveMeHeader("about");
	?>
	<!-- do the main stuff in here -->
	<div class="main">
		<!--  -->
		<!-- Main top -->
		<?php
			include "./components/page_header.php";
			giveMePageHeader("About us", "We can also you sell what you have brought from your home country. 
			Let's share culture. ");
		?>
		<!--  -->
		<!--  -->
		<!-- loop within about and display them -->
		<!--  -->
		<!--  -->
		<!-- want to book? -->
		<!--  -->
		<div class="want-to-book">
			<div class="container">
				<div class="row">
					<div class="col col-30">
						<div>
						<h1>
							Our networks in different countries?
						</h1>
						<p>
							We can help you book in other hotels that we have networks with.
						</p>
						</div>
					</div>
					
					<div class="col col-70">
						<div class="row-images row">
							<div class="col-img" style="background-image:url('./images/dmitriy-alaev-1231935-unsplash.jpg')">
								<div class="btn-h">
									<button class="btn btn-dark">Check these</button>
								</div>
							</div>
							<div class="col-img" style="background-image:url('./images/gabriel-ghnassia-518-unsplash.jpg')">
								<div class="btn-h">
									<button class="btn btn-dark">Check these</button>
								</div>
							</div>
							<div class="col-img" style="background-image:url('./images/hubert-mousseigne-661236-unsplash.jpg')">
								<div class="btn-h">
									<button class="btn btn-dark">Check these</button>
								</div>
							</div>
							<div class="col-img" style="background-image:url('./images/mohamed-ajufaan-701619-unsplash.jpg')">
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
		<!-- Our history -->
		<div class="container">
			<div class="row">
				<div class="col-60 mrl-auto">
					<h1 class="text-center text-primary p3">
						Our history
					</h1>
					<b class="text-primary">1900</b>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquid quae architecto molestiae veritatis, quas modi maxime labore debitis, at dolore! Incidunt consequatur maxime deserunt illum, ipsa iste modi mollitia.
					</p>
					<b class="text-primary">1900</b>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquid quae architecto molestiae veritatis, quas modi maxime labore debitis, at dolore! Incidunt consequatur maxime deserunt illum, ipsa iste modi mollitia.
					</p>
					<b class="text-primary">1900</b>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquid quae architecto molestiae veritatis, quas modi maxime labore debitis, at dolore! Incidunt consequatur maxime deserunt illum, ipsa iste modi mollitia.
					</p>
					<b class="text-primary">1900</b>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquid quae architecto molestiae veritatis, quas modi maxime labore debitis, at dolore! Incidunt consequatur maxime deserunt illum, ipsa iste modi mollitia.
					</p>
					<b class="text-primary">1900</b>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquid quae architecto molestiae veritatis, quas modi maxime labore debitis, at dolore! Incidunt consequatur maxime deserunt illum, ipsa iste modi mollitia.
					</p>

				</div>
			</div>
		</div>
		<!--  -->
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
