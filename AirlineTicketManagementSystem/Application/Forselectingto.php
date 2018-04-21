<?php require_once "../DataService/flight_service.php";?>
<?php require_once "../DataService/companyinfo_service.php";?>

<?php
    $companyname=$_POST["airline"];
    $from=$_POST["name"];
    $company=getCompanyIdByName($companyname);
    $comapanyid=$company["company id"];
    $arrival= getarrivalbycompanyidanddeparture($comapanyid, $from);
    echo json_encode($arrival);
?>
