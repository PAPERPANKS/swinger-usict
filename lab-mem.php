<!DOCTYPE html>
<html lang="en-us" class="no-js">

	<?php include_once('header.php'); ?>

	<body>
        <?php include_once('navigation.php');
        session_start();
        $_SESSION['bannerTitle'] = 'Lab Members';
        include_once('nav-banner.php'); ?>

        <?php
            /*
            $profile_det = [
                ['image_src','student_name','roll_no']
            ]
            */
            $profile_det = [ 
                ['P1.jpg','SHALINI GUPTA','00316409609'],
                ['PRERNA.jpg','PRERNA SHARMA','01016405309'],
                ['ARUN.jpg','ARUN KUMAR','02216405310'],
                ['P1.jpg','PRITI BHARDWAJ','01516404811'],
                ['PRAGATI.jpg','PRAGATI DHAIYA','00316414811'],
                ['RAHUL.jpg','RAHUL DIXIT','00816405311'],
                ['MAHMOOD.jpg','MAHMOOD DHARI ALI','02616405312'],
                ['P1.jpg','VIBHA BHARDWAJ','01216404813'],
                ['P1.jpg','AFREEN FATIMAH','01516405314'],
                ['PRACHI.jpg','PRACHI GARG','###'],
                ['P1.jpg','RIYA BHATIA','###'],
                ['SAPNA.jpg','SAPNA CHAUDHARY','###'],
                ['PANKAJ.jpg','PANKAJ GAUTAM','01716403215'],
                ['PRANSHU.jpg','PRANSHU MITTAL','02116403215'],              
            ];
        ?>
        
        <section class="portfolio-area">
            <div class="container">               				
                <div>
                    <div class="row grid">
                    <?php
                        foreach ($profile_det as $arr) {                                              
                    ?>
                        <div class="single-portfolio col-sm-4">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="image img-fluid" src="img/lab-mem/<?php echo $arr[0]; ?>" alt="">
                                </div>
                            </div>
                            <div class="p-inner">
                                <h4><?php echo $arr[1]; ?></h4>
                                <div class="cat"><?php echo $arr[2]; ?></div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once('footer.php');
        session_destroy();?>
    </body>  
</html>