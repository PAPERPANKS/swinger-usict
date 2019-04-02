<!DOCTYPE html>
<html lang="en">
    <?php include_once('header.php'); ?>
    <p>The requested page "<?php echo $_SERVER['REQUEST_URI']; ?>" has not found.</p>
    
    <?php
        if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
            $refuri = parse_url($_SERVER['HTTP_REFERER']); // use the parse_url() function to create an array containing information about the domain
            if($refuri['host'] == "localhost"){
                echo "You should email me and tell me I have a dead link on this site.";
            }
            else{
                echo "You should email someone over at " . $refuri['host'] . " and let them know they have a dead link to this site.";
            }	
        }
    ?>
    <body>
        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>404</h1>
                    <h2>Page not found</h2>
                </div>
                <a href="./index.php">Homepage</a>
            </div>
        </div>
    </body>

</html>
