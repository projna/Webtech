<?php require_once "../DataService/person_service.php"; ?> 
<?php
    $idfromlogin=$_POST["UserName"];
    $password= getPersonPasswordById($idfromlogin);
    echo json_encode($password);
?>
