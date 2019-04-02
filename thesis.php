<!DOCTYPE html>
<html lang="en-us" class="no-js">
	<?php session_start();
        $_SESSION['title'] = 'Thesis';
        include_once('header.php'); ?>
	<body>

		<?php 
        include_once('navigation.php');
		include_once('nav-banner.php'); ?>


		<section style="margin-top: 40px;">
		<h2> under contruction....</h2>
		</section>

        <?php include_once('footer.php');
        session_destroy(); ?>
	
	</body>
</html>