<!DOCTYPE html>
<html lang="en-us" class="no-js">
	<?php session_start();
        $_SESSION['title'] = 'Patents';
        include_once('header.php'); ?>
	<body>
		<?php include_once('navigation.php');	
		include_once('nav-banner.php'); 
		$patents = array( 
			array("title"=>"A Green Cipher Technique to secure data and preserve power over handheld devices", "names"=>"Rahul Johari, Harshit Bhatia, Shivani Singh", "patent_no"=>"201611016518", "date_of_filing"=>"May, 2016", "agency_country"=>"The Patent Office, Government of India", "status"=>"Under Review"),
			array("title"=>"Defence Deployment System : An Application of Delay Tolerant Network", "names"=>"Rahul Johari, Afreen Fatimah", "patent_no"=>"201611019150", "date_of_filing"=>"January, 2017", "agency_country"=>"The Patent Office, Government of India", "status"=>"Under Review"),
			array("title"=>"iBLCT : Indian BiLingual Cross Cipher technique", "names"=>"Rahul Johari, Sandeep Kumar, Kalpana Gupta ", "patent_no"=>"201711010204", "date_of_filing"=>"March, 2017", "agency_country"=>"The Patent Office, Government of India", "status"=>"Under Review"),
			array("title"=>"PRanGANN : A Fittest Genetic and Nearest Neighbor Algorithm", "names"=>"Rahul Johari, Prachi Garg", "patent_no"=>"201711021318", "date_of_filing"=>"July 2017", "agency_country"=>"The Patent Office, Government of India", "status"=>"Under Review")
		);
		?>

		<section class="home-about-area">
			<div class="container">
				<!-- <div class="row align-items-center justify-content-between">					
					<div class="col-lg-12 pt-40">
						<ul class="patent-list">
							<li><span class="colored">PATENT NAME :<span> Defence Deployment System : Application of the Delay Tolerant Network</li>
							<li><span class="colored">INVENTOR(S) :<span> Afreen Fatimah, Rahul Johari</li>
							<li><span class="colored">DATE OF FILING :<span> 2017/1/13</li>
							<li><span class="colored">PATENT OFFICE :<span> INDIA</li>
							<li><span class="colored">APPLICATION NUMBER :<span> 201611019150</li>
						</ul>
					</div>
					<div class="col-lg-12 patent-img">
						<img class="img-fluid" src="./img/patent.webp" alt="Patent">
					</div>
				</div> -->
				
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive" style="margin-top:20px;">
							<table class="table table-hover">
								<thead>
									<tr style="color:#04091e;">
										<th scope="col">S. No</th>
										<th scope="col">Patent Title</th>
										<th scope="col">Name of Applicant(s)</th>
										<th scope="col">Patent #</th>
										<th scope="col">Month/Year of Filing</th>
										<th scope="col">Agency/Country</th>
										<th scope="col">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$i = 1;
										foreach ($patents as $patent) { ?>
											<tr style="color:#8490ff;">
												<th scope="row"><?php echo $i++; ?></th>
												<td><?php echo $patent["title"] ?></td>
												<td><?php echo $patent["names"] ?></td>
												<td><?php echo $patent["patent_no"] ?></td>
												<td><?php echo $patent["date_of_filing"] ?></td>
												<td><?php echo $patent["agency_country"] ?></td>
												<td><?php echo $patent["status"] ?></td>
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
		<?php include_once('footer.php');session_destroy();?>
    </body>
</html>