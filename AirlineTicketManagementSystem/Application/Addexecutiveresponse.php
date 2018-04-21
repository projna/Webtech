
<?php require_once "../DataService/person_service.php"; ?>
<?php require_once "../DataService/Executive_service.php"; ?>
<?php require_once "../DataService/companyinfo_service.php"; ?>
<?php
$pid=$_POST["id"];
$cname=$_POST["Company"];
$exid=$_POST["Executive_id"];
$cid= getCompanyIdByName($cname);

$person=array();
$person[id]=$exid;
$person[name]=$pid;
$person[address]=$cid["company id"];
$result1=addexecutive($person);
$result2= updateparsonasexecutive($pid);
var_dump($result2);
if($result1==TRUE && $result2==TRUE)
{
     header("location:Executives.php");  
}
else
{
    header("location:AddExecutive.php");  
}
?>
