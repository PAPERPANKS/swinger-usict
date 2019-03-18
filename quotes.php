<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<?php include_once('header.php'); ?>
	<body>

		<?php 
        include_once('navigation.php');

        session_start();
        $_SESSION['bannerTitle'] = 'Quotes';
        
		include_once('nav-banner.php'); ?>


		<section style="margin-top: 40px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
							“If we knew what it was we were doing, it would not be called research, would it?” 
							― Albert Einstein
						</blockquote>
						<blockquote class="generic-blockquote">
							“To gain knowledge we build and practice, but to gain wisdom we must lose"
							― Anonymous
						</blockquote>
						<blockquote class="generic-blockquote">
							"The whole is greater than the sum of its parts"
							― Aristotle
						</blockquote>
						<blockquote class="generic-blockquote">
							'Purpose Fuels Passion'....Keep passion in yourself ignited
						</blockquote>
					</div>
				</div>
			</div>
		</section>

        <?php include_once('footer.php'); 
        session_destroy(); ?>
	
	</body>
</html>