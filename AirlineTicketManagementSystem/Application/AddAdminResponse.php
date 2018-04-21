<?php require_once "../DataService/person_service.php";?>
<?php
$i= $_GET['id'];
$result= updateparsonasadmin($i);
if($result)
{
    header("location:ShowallAdmin.php");  
}
else
{
    header("location:addAdmin.php");
}
?>

