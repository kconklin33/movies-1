<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>



<?php
$result= get_actors();  
$size = sizeof($result);
?>


<h2><a href="actor.php?aID=<?php echo $actor['actorID']; ?>">
<?php echo $actor['first_name'].' '.$actor['last_name']; ?></a></h2>
?>





<?php require_once( 'incl/footer.php' ); ?>
