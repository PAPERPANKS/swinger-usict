<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<?php include_once('header.php'); ?>
	<body>

		<?php 
        include_once('navigation.php');
        session_start();
        $_SESSION['bannerTitle'] = 'Thesis';
		include_once('nav-banner.php'); ?>


		<section style="margin-top: 40px;">
		<h2> under contruction....</h2>
		</section>

        <?php include_once('footer.php');
        session_destroy(); ?>
	
	</body>
</html>