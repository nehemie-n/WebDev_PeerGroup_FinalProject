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

<body id="chatpage">
	<!-- include the main header -->
	<?php
	include "./components/header.php";
	giveMeHeader("contact");
	?>
	<!-- do the main stuff in here -->
	<div class="main">
		<!--  -->
		<div class="over">
			<div class="container">
				<div class="row expl-col">
					<div class="col-40 mr-auto">
						<h1 class="text-primary">
							Chat with Seller
						</h1>
						<p class="text-white">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste corrupti obcaecati, deserunt voluptates dolores, quo ad ex iusto neque magnam nostrum consequuntur recusandae dolor maxime esse sunt in? Ullam, tenetur.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--  -->
		<!-- loop within contact and display them -->
		<div class="container">
			<div class="row">
				<div class="chat-h col-40 mrl-auto">
					<div id="msg-holders" class="msg-holders">
						<div class="msg msg-left">Hey?</div>
						<div class="msg msg-left">You want to buy?</div>
					</div>
					<form name="msg_input" class="msg_input" action="">
						<input name="msg" placeholder="Your message" type="text">
						<button onclick="sendMessage(event)" type="button" class="btn btn-primary">Send</button>
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