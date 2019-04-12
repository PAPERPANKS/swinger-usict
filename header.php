<?php 
    function putTitle(){
        if( isset( $_SESSION['title'] ) ) {
            echo 'SWINGER - ' . $_SESSION['title'];
        }else {
            echo 'SWINGER';
        }
    } 
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="author" content="paperpanks">
    <meta name="description" content="Rahul Johari's : Security, Wireless, IoT Network Group of Engineering and Research Lab">
    <meta name="keywords" content="Swinger Lab, Rahul Johari, DTN, SHIP, USIC&T, GGSIPU">
    <meta charset="UTF-8">
    <title>
        <?php  putTitle(); ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
