<!DOCTYPE html>
<html lang="en-us" class="no-js">

    <?php session_start();
        $_SESSION['title'] = 'Lab Members';
        include_once('header.php'); ?>

	<body>
        <?php include_once('navigation.php');
        include_once('nav-banner.php'); ?>

        <?php
            /*
            $profile_det = [
                ['image_src','student_name','roll_no']
            ]
            */
            $profile_det = [ 
                ['shalini.webp','SHALINI GUPTA','00316409609'],
                ['PRERNA.webp','PRERNA SHARMA','01016405309'],
                ['ARUN.webp','ARUN KUMAR','02216405310'],
                ['P1.webp','PRITI BHARDWAJ','01516404811'],
                ['PRAGATI.webp','PRAGATI DHAIYA','00316414811'],
                ['RAHUL.webp','RAHUL DIXIT','00816405311'],
                ['MAHMOOD.webp','MAHMOOD DHARI ALI','02616405312'],
                ['P1.webp','VIBHA BHARDWAJ','01216404813'],
                ['AFREEN.webp','AFREEN FATIMAH','01516405314'],
                ['PRACHI.webp','PRACHI GARG','60116410514'],
                ['RIYA.webp','RIYA BHATIA','41316401515'],
                ['SAPNA.webp','SAPNA CHAUDHARY','00516405318'],
                ['PANKAJ.webp','PANKAJ GAUTAM','01716403215'],
                ['PRANSHU.webp','PRANSHU MITTAL','02116403215'],              
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
                                    <img class="image img-fluid" src="img/lab-mem/<?php echo $arr[0]; ?>" alt="<?php echo $arr[1]; ?>">
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
