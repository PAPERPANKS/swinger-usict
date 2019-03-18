<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<?php include_once('header.php'); ?>
	<body>

		<?php 
		include_once('navigation.php');
		session_start();
        $_SESSION['bannerTitle'] = 'Publications';
		include_once('nav-banner.php'); ?>


		<section style="margin-top: 40px;">
		<div class="container">
			<div class="row justify-content-center">
			<?php include_once('publications.php'); ?>
			</div>
		</div>
		</section>

		<?php include_once('footer.php');
		session_destroy(); ?>
	
	</body>
</html>