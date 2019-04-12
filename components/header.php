<?php
 function giveMeHeader($active){
	?>
		<div class="main-header">
			<div class="header-fx">
				<div class="logo">
					<img src="./images/logo.svg" height="50px" alt="">
				</div>
				<ul class="menu">
					<li class="menu-item">
						<a class="menu-link <?php if($active == "home") echo " active"; ?>" href="./index.php">Home</a>
					</li>
					<li class="menu-item">
						<a class="menu-link <?php if($active == "rooms") echo " active"; ?>" href="./rooms.php">Rooms</a>
					</li>
					<li class="menu-item">
						<a class="menu-link <?php if($active == "shop") echo " active"; ?>" href="./shop.php">Shop</a>
					</li>
					<li class="menu-item">
						<a class="menu-link <?php if($active == "restaurant") echo " active"; ?>" href="./restaurant.php">Restaurant</a>
					</li>
					<li class="menu-item">
						<a class="menu-link <?php if($active == "about") echo " active"; ?>" href="./about.php">About us</a>
					</li>
					<li class="menu-item">
						<a class="menu-link <?php if($active == "contact") echo " active"; ?>" href="./contact.php">Contact us</a>
					</li>
				</ul>
			</div>
			<div class="header-replacer">
			</div>
		</div>
	<?php
 }
?>



