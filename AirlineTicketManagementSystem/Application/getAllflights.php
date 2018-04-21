<?php require_once "../DataService/flight_service.php";?>
<?php
    $flight=getallflights();
    echo json_encode($flight);

?>

