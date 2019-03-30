<!DOCTYPE html>
<html lang="en-us" class="no-js">
	<?php include_once('header.php'); ?>
<body>
	<?php include_once('navigation.php');
	session_start();
	$_SESSION['bannerTitle'] = 'Patents';
    include_once('nav-banner.php'); ?>

	<section class="home-about-area">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				
				<div class="col-lg-12 pt-40">
					<ul class="patent-list">
						<li><span class="colored">PATENT NAME :<span> Defence Deployment System : An Application of Delay Tolerant Network</li>
						<li><span class="colored">INVENTOR(S) :<span> Afreen Fatimah, Rahul Johari</li>
						<li><span class="colored">DATE OF FILING :<span> 2017/1/13</li>
						<li><span class="colored">PATENT OFFICE :<span> INDIA</li>
						<li><span class="colored">APPLICATION NUMBER :<span> 201611019150</li>
					</ul>
				</div>
				<div class="col-lg-12 patent-img">
					<img class="img-fluid" src="./img/patent.webp" alt="Patent">
				</div>

			</div>
	</section>
	<?php include_once('footer.php');session_destroy();?>
    </body>
</html>