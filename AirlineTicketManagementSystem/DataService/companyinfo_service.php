<?php include_once("dataAccess.php"); ?>
<?php
    function getAllcomapnyName()
    {
        $sql="SELECT `company name` FROM `companyinfo`";
        $result = executeSQL($sql);
        $companyname = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $companyname [$i] = $row;
        }
        
        return $companyname;
    }
    function getCompanyIdByName($companynamegetID)
    {
     $sql="SELECT * FROM `companyinfo` WHERE `company name`='$companynamegetID'";
     $result= executeSQL($sql);
     $companyId= mysqli_fetch_assoc($result);
     return $companyId;
    }
    function getCompanynameByid($companygetID)
    {
     $sql="SELECT `company name` FROM `companyinfo` WHERE `company id`='$companygetID'";
     $result= executeSQL($sql);
     $companyId= mysqli_fetch_assoc($result);
     return $companyId;
    }
    
?>

