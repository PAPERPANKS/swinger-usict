<!DOCTYPE html>
<html lang="en-us" class="no-js">
	<?php session_start();
        $_SESSION['title'] = 'Thesis';
        include_once('header.php'); ?>
	<body>

		<?php 
      include_once('navigation.php');
			include_once('nav-banner.php'); 
			$thesis = array( 
				array("year"=>"2018", "programme"=>"M.Tech(CSE)", "enroll_no"=>"01016404816", "name"=>"Vishal Kumar", "title"=>"Enhanced Data Security Architecture in Cloud Computing Using Cryptography"),
				array("year"=>"2018", "programme"=>"M.Tech(IT)", "enroll_no"=>"00116405316", "name"=>"Shubham Gupta", "title"=>"Cloud Based Cryptographic Technique"),
				
				array("year"=>"2017", "programme"=>"M.Tech(CSE)", "enroll_no"=>"00916405315", "name"=>"Sandeep Kumar", "title"=>"iBLCT: Indian Bi-Lingual Cross Cipher Technique"),
				
				array("year"=>"2016", "programme"=>"M.Tech(IT)", "enroll_no"=>"01516405314", "name"=>"Afreen Fatimah", "title"=>"Security issues in Delay Tolerant Network"),
				array("year"=>"2016", "programme"=>"M.Tech(CSE)", "enroll_no"=>"00316404814", "name"=>"Purva Grover", "title"=>"Online Faculty Feedback System"),
				array("year"=>"2016", "programme"=>"M.Tech(IT)", "enroll_no"=>"01816405314", "name"=>"Priyanka Dhaka", "title"=>"HCAB: HealthCare Analysis and Data Archival using Big Data Tool"),
				array("year"=>"2016", "programme"=>"M.Tech(CSE)", "enroll_no"=>"00816404814", "name"=>"Karishma Varshney", "title"=>"Security in Remote E-voting System using Aneka Platform"),
				
				array("year"=>"2015", "programme"=>"M.Tech(IT)", "enroll_no"=>"01516405313", "name"=>"Laukendra Singh", "title"=>"Cross Language Cipher Technique"),
				array("year"=>"2015", "programme"=>"M.Tech(CSE)", "enroll_no"=>"01216404813", "name"=>"Vibha Bhardwaj", "title"=>"Query Execution Evaluation In Wireless Network Using MyHadoop"),
				
				array("year"=>"2014", "programme"=>"M.Tech(IT)", "enroll_no"=>"02616405312", "name"=>"Mahmood Dhari Ali", "title"=>"Enhancement and Implementation of Routing Protocols In Delay Tolerant Network"),
				array("year"=>"2014", "programme"=>"M.Tech(IT)", "enroll_no"=>"01216404812", "name"=>"Ishu Jain", "title"=>"CAVEAT: Credit Card Vulnerability Exhibition and Authentication Tool"),
				array("year"=>"2014", "programme"=>"M.Tech(CSE)", "enroll_no"=>"01816404812", "name"=>"Swati Hans", "title"=>"An Extended PlayFair Cipher Technique and its Comparative analysis using CrypTool"),
				
				array("year"=>"2013", "programme"=>"M.Tech(CSE)", "enroll_no"=>"01516404811", "name"=>"Priti Bhardwaj", "title"=>"Membership Models For Routing In Delay Tolerant Network Using Genetic Algorithm"),
				array("year"=>"2013", "programme"=>"M.Tech(IT)", "enroll_no"=>"00816405311", "name"=>"Rahul Dixit", "title"=>"Metaheuristic Driven Approach for Parking Allotment Framework in Delay Tolerant Network"),
				array("year"=>"2013", "programme"=>"M.Tech(DWC)", "enroll_no"=>"00316414811", "name"=>"Pragati Dahiya", "title"=>"Optimized Routing in Delay Tolerant Network using Metaheuristic Approach"),
				
				array("year"=>"2012", "programme"=>"M.Tech(IT)", "enroll_no"=>"02216405310", "name"=>"Arun Kumar", "title"=>"Developing an Intelligent traffic Light System Using Delay Tolerant Network"),
				
				array("year"=>"2011", "programme"=>"M.Tech(IT)", "enroll_no"=>"00316409609", "name"=>"Shalini Gupta", "title"=>"Adaptive and Efficient Data Delivery Schemes for Delay and Disruption Tolerant Mobile Sensor Networks"),
				array("year"=>"2011", "programme"=>"M.Tech(IT)", "enroll_no"=>"01016405309", "name"=>"Prerna Sharma", "title"=>"Optimized Routing in a Network using Genetic Algorithm")
			);
			?>

		<section class="home-about-area">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive" style="margin-top:20px;">
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">S. No</th>
										<th scope="col">Year</th>
										<th scope="col">Programme</th>
										<th scope="col">Enrollment #</th>
										<th scope="col">Name</th>
										<th scope="col">Thesis Title</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$i = 1;
										foreach ($thesis as $thesis) { ?>
											<tr>
												<th scope="row"><?php echo $i++; ?></th>
												<td><?php echo $thesis["year"] ?></td>
												<td><?php echo $thesis["programme"] ?></td>
												<td><?php echo $thesis["enroll_no"] ?></td>
												<td><?php echo $thesis["name"] ?></td>
												<td><?php echo $thesis["title"] ?></td>												
											</tr>
										<?php }
									?>
								</tbody>
							</table>
						</div>
					</div>			
				</div>
			</div>
		</section>

		<?php include_once('footer.php');
		session_destroy(); ?>
	
	</body>
</html>