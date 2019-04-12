
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hergesia Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
<link rel="icon" href="./images/logo.svg" type="image/svg" sizes="16x16">

	<script src="./js/main.js"></script>
</head>
<body>
	<!-- include the main header -->
	<?php
		include "./components/header.php";
		giveMeHeader("shop");
	?>
	<!-- do the main stuff in here -->
	<div class="main">
		<!--  -->
		<!-- Main top -->
		<?php
			include "./components/page_header.php";
			giveMePageHeader("shop", "We can also you sell what you have brought from your home country. 
			Let's share culture. ");
		?>
		<!--  -->
		<!--  -->
		<!-- loop within shop and display them -->
		<div class="container">
			<div class="row ov-wrap">
					<?php
					$rooms = [
						["./images/shop/amanda-vick-1398188-unsplash.jpg", "max Rummer", "300", "Rwanda", "Neymar"],
						["./images/shop/davids-kokainis-703614-unsplash.jpg", "Height Fuller", "200", "Rwanda", "Neymar"],
						["./images/shop/igor-rand-1190757-unsplash.jpg", "Tech Filled", "100", "Rwanda", "Neymar"],
						["./images/shop/jenn-lopez-657936-unsplash.jpg", "Confortable Gang", "130", "Rwanda", "Neymar"],
						["./images/shop/ryan-moreno-1289597-unsplash.jpg", "Two in One", "80", "Rwanda", "Neymar"],
						["./images/shop/yoann-boyer-342336-unsplash.jpg", "Dizzy Boy", "100", "Rwanda", "Neymar"],
					];
					for ($i=0; $i < sizeof($rooms); $i++) { 
						# code...
						?>
							<div style="
							background-image: url('<?php echo $rooms[$i][0]; ?>')
							" class="element prod">
								<div class="ov">
									<div class="top">
										From <?php echo $rooms[$i][3]; ?>
										<div class="buy-btn-h">
											<button class="btn btn-primary">Buy</button>
										</div>
									</div>
									<div class="bottom">
										<div>
											<h4 class="text-black"><?php echo $rooms[$i][1]; ?></h4>
											<h4 class="text-black"><b>$<?php echo $rooms[$i][2]; ?></b></h4>
										</div>
										<div class="ml-auto">
											<h5 class="text-primary"><b><br><?php echo $rooms[$i][4]; ?></b></h5>
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
