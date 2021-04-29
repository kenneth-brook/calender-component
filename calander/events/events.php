<?php

include_once('inc/db_config.php');

$sql="select * FROM events WHERE active = 1 ORDER by StartDate DESC"; 

$response = array();
$posts = array();
$result=mysqli_query($connection,$sql);


//echo mysql_error();
               
$events = array();


while($row=mysqli_fetch_assoc($result)) 
{ 



$name=$row['Name'];
$image=$row['image'];
$date=$row['StartDate'];

//echo $name."<br>";


$date = explode('-', $date);

$year  = $date[0];
$month = $date[1];
$day   = $date[2];


$time=$row['time'];
$duration=$row['duration'];
$color=$row['color'];
$location=$row['location']; 
$description=$row['description'];

$description = str_replace("\"", "'", $description);


$event = new stdClass();
	$event->name = $name; 
	$event->image = $image; 
	$event->day = $day;
	$event->month = $month;
	$event->year = $year;
	$event->time = $time; 
	$event->color = $color;
	$event->location = $location; 
	$event->description = $description;
	array_push($events, $event);

} 


echo json_encode($events);
?>