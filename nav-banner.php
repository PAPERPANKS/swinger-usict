<?php 
    function putBannerTitle(){
        if( isset( $_SESSION['bannerTitle'] ) ) {
            echo $_SESSION['bannerTitle'];
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
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span>  <?php putBannerTitle(); ?></p>
            </div>
        </div>
    </div>
</section>