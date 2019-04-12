<?php
 function giveMePageHeader($title, $text){
	?>
	<div class="page_header">
		<div class="page_header-ov">
			<div class="container">
				<div class="wrapper">
					<h1>
						<?php
							echo $title;
						?>
					</h1>
					<p>
						<?php
							echo $text;
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php
 }
?>

