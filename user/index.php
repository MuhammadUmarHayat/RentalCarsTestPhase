<?php 
session_start();
$username=   $_SESSION['username']
?>

<?php
include("header.php");
include("nav.php")?>

<main >
<section>
    <h1>
        Welcome <?php echo $username?>
    </h1>
</section> 
</main>
   