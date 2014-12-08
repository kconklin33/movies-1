<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>


<?php
$result= get_studios();  
$size = sizeof($result);
?>

<a href="studio.php?sID=<?php echo $studio['studioID']; ?>">
    <?php echo $studio['name']; ?></a>
<br>
<?php echo $studio['city'].' '. $studio['state'].' '. $studio['zip']; ?>





<?php require_once( 'incl/footer.php' ); ?>
