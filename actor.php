<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

<?php
$result = get_actor($actorID);
?>

<?php
echo  "<h2>" . $result["first_name"] . " " . $result["last_name"]; "</h2>";
?>
<br>
<?php echo $actor['dob']; ?>
<br>
<h2>Biography:</h2><?php echo $actor['bio']; ?>




<?php require_once( 'incl/footer.php' ); ?>
