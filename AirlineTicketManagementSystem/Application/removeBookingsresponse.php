<?php require_once "../DataService/Booking_service.php"; ?>
<?php
$userid=$_GET["userid"];
$flightid=$_GET["flightid"];
$expiredate=$_GET["expiredate"];
$reslut= removebookings($flightid, $userid, $expiredate);
if($reslut)
{
    header("location:removeBookings.php");
}
?>

