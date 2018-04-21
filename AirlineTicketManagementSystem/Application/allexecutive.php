<?php require_once "../DataService/Executive_service.php";?>
<?php
    $excutive= getallexecutiveid(); 
    echo json_encode($excutive);

?>

