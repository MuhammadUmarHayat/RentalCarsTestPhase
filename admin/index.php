<?php 
session_start();
$username=   $_SESSION['username']
?>

<?php
include("header.php");
include("nav.php")?>

<main style="">
<section style="color:green;background-color:white; height:500px;">
    <h1>
        Welcome <?php echo $username?>
    </h1>
</section> 
</main>
   