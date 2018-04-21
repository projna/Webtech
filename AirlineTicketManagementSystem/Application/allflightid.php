<?php require_once "../DataService/flight_service.php";?>
<?php
    $excutive= getallflightid(); 
    echo json_encode($excutive);

?>
