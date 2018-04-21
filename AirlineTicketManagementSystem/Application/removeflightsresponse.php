<?php require_once "../DataService/flight_service.php";?>
<?php
$i= $_GET['id'];
$result= removeflight($i);
header("location:removeflightsexecutive.php");
?>

