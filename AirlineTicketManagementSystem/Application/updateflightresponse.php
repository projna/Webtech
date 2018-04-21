<?php require_once "../DataService/flight_service.php"; ?>
<?php
$date=$_POST["Date"];
$time=$_POST["Time"];
$price=$_POST["Price"];
$totalseat=$_POST["TotalSeat"];
$flightid=$_POST["setflight"];
$flight=array();
$flight['price']=$price;
$flight['seat']=$totalseat;
$flight['date']=$date;
$flight['time']=$time;
$flight['id']=$flightid;
$result= editflights($flight);
if($result)
{
    header("location:showflightforexecutive.php");
}


?>

