<?php require_once "../DataService/person_service.php"; ?>
<?php
if(empty($_POST))
{
    header("location:signup.php");
}
else
{
$name=" ".$_POST["Title"]." ".$_POST["FirstName"]." ".$_POST["LastName"];
$username=$_POST["userName"];
$Address=$_POST["Discrict"];
$dob=$_POST["DOB"];
$mobile=$_POST["MobileNumber"];
$Email=$_POST["EmailAddress"];
$Pass=$_POST["EnterPassword"];
$person=array();
$person['id']= $username;
$person['name']= $name;
$person['address']= $Address;
$person['DOB']= $dob;
$person['phn']=$mobile;
$person['email']= $Email;
$person['password']=$Pass;
$person['persontypeid']="01";
$result=addPerson($person);
if($result==true)
{
    
    header("location:UserLoginPage.php");
}
else
{
   
    header("location:signup.php");
}
}

?>

