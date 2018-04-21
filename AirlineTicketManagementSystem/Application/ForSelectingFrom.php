<?php require_once "../DataService/flight_service.php";?>
<?php require_once "../DataService/companyinfo_service.php";?>
<?php


    $companyname=$_POST["name"];
    $companyid=getCompanyIdByName($companyname);
    $comapanyid=$companyid["company id"];
    $departue= getdeparturebycompanyid($comapanyid);
    echo json_encode($departue);
    

?>

