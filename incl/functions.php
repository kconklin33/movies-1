<?php
require_once('incl/Database.php'); 
$host= 'localhost';
$u= 'lcoalhost';
$p= 'root';
$d= 'movies';
global $db;
$db= new Database($d, $u, $p, $host);

//All Functions were Based of Cigar Repo, Changed Variables, names, and Id's Accordingly 
//All Functions are categorized by corresponding attributes





//All of Actor Functions

function get_actors(){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM actors ORDER BY 'first_name'" );
	return $db->resToArray($results);
}
//Gets all Actors 


function get_actor($actorID){
	$db= $GLOBALS['db'];
	$query= "SELECT * FROM actors WHERE aID='$actorID'";
	return $db->get_row($results);
}
//Gets single Actor and their info

function add_actor($info){
	$db= $GLOBALS['db']; 
	extract($info);
	$submitted= $db->query("INSERT INTO actors VALUES('', '$first_name', '$last_name', '$bio', '$dob', '$won_oscar', '$timestamp')");
	echo "<h3>$first_name $last_name has been submitted!</h3>"; 
}
//Adds Actor








//All of Movie Functions

function get_movies(){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM movies ORDER BY title " );
	return $db->resToArray($results);
}
//Gets all Movies


function get_movie($movieID){
	$db= $GLOBALS['db'];
	$query= "SELECT * FROM movies WHERE mID='$movieID'";
	return $db->get_row($query);
}
//Gets one movie that corresponds to Moive ID


function add_movie($info){
	$db= $GLOBALS['db']; 
	extract($info);
	$submitted= $db->query("INSERT INTO movies VALUES('', '$title', '$year_released', '$synopsis', '$was_novel', '$studioID', '$timestamp')");
	echo "<h3>The movie $title was submitted!</h3>"; 
}
//Adds Movie










function get_studios(){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM studio" );
	return $db->resToArray($results);
}
//Gets all Studios


function get_studio($studioID){
	$db= $GLOBALS['db'];
	$query= "SELECT * FROM studio WHERE sID='$studioID'";
	return $db->resToArray($query);
}
//Gets studio that corresponds to that Movie


function add_studio($info){
	$db= $GLOBALS['db']; 
	extract($info);
	$submitted= $db->query("INSERT INTO studio VALUES('', '$name', '$city', '$state', '$zip', '$timestamp')");
	echo "<h3>$name was submitted!</h3>"; 
}
















function print_array($a){
	print "<pre>";
	print_r($a);
	print "</pre>";
}
?>
