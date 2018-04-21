<?php require_once "../DataService/Executive_service.php"; ?>
<?php require_once "../DataService/flight_service.php";?>
<?php
    var_dump($_POST);
    $person=array();
    $person['id']=$_POST["FlightID"];
    $person['name']=$_POST["CompanyName"];
    $person['address']=$_POST["Departure"];
    $person['DOB']=$_POST["Arrival"];
    $person['password']=$_POST["Price"];
    $person['persontypeid']=$_POST["TotalSeat"];
    $person['email']=$_POST["Date"];
    $person['phn']=$_POST["time1"];
    $result= addflight($person);
    if($result==TRUE)
    {
        header("location:showflightforexecutive.php");
    }
 else {
     header("location:AddFlightInfo.php");
        
}
    
    

    
?>

