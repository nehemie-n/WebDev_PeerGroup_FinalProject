
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hergesia Restaurant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
<link rel="icon" href="./images/logo.svg" type="image/svg" sizes="16x16">

	<script src="./js/main.js"></script>
</head>
<body>
	<!-- include the main header -->
	<?php
		include "./components/header.php";
		giveMeHeader("restaurant");
	?>
	<!-- do the main stuff in here -->
	<div class="main">
		<!--  -->
		<!-- Main top -->
		<?php
			include "./components/page_header.php";
			giveMePageHeader("Restaurant", "We have food of different kinds prepared having in mind the fact that we welcome diversity and its needs.");
		?>
		<!--  -->
		<!--  -->
		<!-- loop within restaurant and display them -->
		<div class="container">
			<div class="row ov-wrap">
					<?php
					$food = [
						["./images/food/bobby-rodriguezz-1043119-unsplash.jpg", "max Rummer", "300"],
						["./images/food/brooke-lark-500141-unsplash.jpg", "Height Fuller", "200"],
						["./images/food/eaters-collective-172258-unsplash.jpg", "Tech Filled", "100"],
						["./images/food/monika-grabkowska-759473-unsplash.jpg", "Confortable Gang", "130"],
						["./images/food/whitney-wright-356665-unsplash.jpg", "Two in One", "80"],
						["./images/food/monika-grabkowska-759473-unsplash.jpg", "Dizzy Boy", "100"],
					];
					for ($i=0; $i < sizeof($food); $i++) { 
						# code...
						?>
							<div style="
							background-image: url('<?php echo $food[$i][0]; ?>')
							" class="element food">
								<div class="ov">
									<div class="top">
										<div class="buy-btn-h">
											<button class="btn btn-primary">Order</button>
										</div>
									</div>
									<div class="bottom">
										<div>
											<h4 class="text-black"><?php echo $food[$i][1]; ?></h4>
										</div>
										<div class="ml-auto">
											<h4 class="text-black"><b>$<?php echo $food[$i][2]; ?></b></h4>
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
