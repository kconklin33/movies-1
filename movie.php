<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>




<h2>Title: <?php echo $movie['title']; ?></h2>
<br>
<?php echo $movie['year_released'];?>
<br><br>
<?php echo $movie['synopsis']; ?>
<br>
<?php echo$studio = get_studio($movie['studioID']);?>



<?php require_once( 'incl/footer.php' ); ?>
