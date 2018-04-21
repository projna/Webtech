<?php require_once "../DataService/person_service.php";?>
<?php
$i= $_GET['id'];
$result= removePerson($i);
header("location:removeMember.php");
?>

