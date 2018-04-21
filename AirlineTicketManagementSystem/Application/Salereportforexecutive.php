<?php require_once "../DataService/Executive_service.php"; ?>
<?php require_once "../DataService/companyinfo_service.php"; ?>
<?php
    if ( !isset($_SESSION) )
    { session_start(); 
    
    } 
    $userId=$_SESSION["username"];
    $sqlres=getcompanyidbypersonid($userId);
    $companyid=$sqlres["company id"];
    $company=getCompanynameByid($companyid);
    $companyname=$company["company name"];
    header("location:TotalSale.php?id=$companyname");
?>

