<!DOCTYPE html>
<html lang="en-us" class="no-js">
	<?php include_once('header.php') ?>

	<body>
		<?php include_once('navigation.php');
		session_start();
        $_SESSION['bannerTitle'] = 'Awards';
		include_once('nav-banner.php'); ?>

		<section class="faq-area pb-120" style="margin-top: 40px;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<dl class="accordion">
							<dt>
								<a href="">Awarded "Best Research Paper Award" for the Paper</a>
							</dt>
							<dd>Rahul Johari, Kalpana Johari “Strengthening the Wireless LAN Technology by Usage of the RMI Architecture” presented at the International Conference on Network Security organized
							by Erode Sengunthar Engineering College, Erode from Jan 29-31 2007.
							</dd>
							<dt>
								<a href="">Awarded Certificate of Appreciation and Medal for the paper</a>
							</dt>
							<dd>Rahul Johari  , Neelima Gupta , Sandhya Khurana ,” DSG-PC: Dynamic Social Grouping based Routing for Non-uniform Buffer Capacities in DTN Supported with Periodic Carriers” in
							Springer’s 9th International Conference on Heterogeneous Networking for Quality, Reliability, Security and Robustness(QSHINE 2013) at Gautam Buddha University from 11-12 January 2013.
							</dd>
							<dt>
								<a href="">Won the "People's  Choice Award"</a>
							</dt>
							<dd>Vandana Juyal, Rahul Johari  “Node Reachability In DTN For Indian  Scenario" at 4th Security and Privacy Research Symposium at IIIT-Delhi,11th-12th April 2014.
							</dd>
							<dt>
								<a href="">Awarded Certificate of Appreciation and Recognition for the paper</a>
							</dt>
							<dd>Rahul Johari, Dhari Ali Mahmood, "GA-LORD : Genetic Algorithm and LTPCL Oriented Routing Protocol in Delay Tolerant Network" in  Springer's International Conference on Wireless Communications, 
							Networking and Applications (WCNA 2014) ,December 27-28 2014,Shenzhen, CHINA
							</dd>
							<dt>
								<a href="">Awarded Certificate of Appreciation and Recognition for the paper</a>
							</dt>
							<dd>Rahul Johari, Sakshi Dhama, " Routing protocols in delay tolerant networks: application - Oriented survey" in  Springer's International Conference on Wireless Communications,Networking
							and Applications (WCNA 2014) ,December 27-28  2014,Shenzhen, CHINA
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</section>

		<?php include_once('footer.php');
		session_destroy(); ?>

	</body>
</html>