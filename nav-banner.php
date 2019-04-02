<?php 
    function putBannerTitle(){
        if( isset( $_SESSION['title'] ) ) {
            echo $_SESSION['title'];
        }else {
            echo "???";
        }
    } 
?>

<section class="about-banner">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                <?php putBannerTitle(); ?>
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="fa fa-angle-right"></span>  <?php putBannerTitle(); ?></p>
            </div>
        </div>
    </div>
</section>