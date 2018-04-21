<?php include_once("dataAccess.php"); ?>
<?php
    function addbooking($booking){
        $sql = "INSERT INTO `booking`(`Userid`, `flightid`, `companyname`, `issuedate`, `expiredate`, `passenger`) VALUES ('$booking[pid]','$booking[fid]','$booking[cname]','$booking[isdate]','$booking[exdate]','$booking[psnger]')";
        $result = executeSQL($sql);
        return $result;
    }
    function allbooking()
    {
        $sql = "SELECT * FROM `booking`";        
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
        {
            $person[$i] = $row;
        }
        
        return $person;
    }
    function removebookings($flightid,$userid,$expiredate){    
        $sql="DELETE FROM `booking` WHERE `Userid`='$userid' AND `flightid`='$flightid'  AND `expiredate`='$expiredate'";
        $result = executeSQL($sql);
        return $result;
    }
    function getbookingbyid($personid,$expire)
    {
        $sql="SELECT * FROM `booking` WHERE `Userid`='$personid' AND `expiredate` > '$expire'";
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
        {
            $person[$i] = $row;
        }
        
        return $person;
    }
?>

