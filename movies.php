<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>



<?php
$result= get_movies();  
$size = sizeof($result);
?>

		 		
<td><h2><a href="movie.php?movieID=<?php echo $movie['movieID']; ?>"> 
<?php echo $movie['title']; ?></a></h2></td> <td><h2>
<?php echo $movie['year_released']; ?></h2></td></tr>
		 	








<?php require_once( 'incl/footer.php' ); ?>
