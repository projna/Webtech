<?php include_once("dataAccess.php"); ?>
<?php
    function getallexecutiveid()
    {
        $sql="SELECT `executiveid` FROM `executiveinfo` ";
               
        $result = executeSQL($sql);
        
        $exid = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
        {
            $exid[$i] = $row;
        }
        
        return $exid;
    }
    function addexecutive($person)
    {
        
        $sql = "INSERT INTO `executiveinfo`(`executiveid`, `personid`, `company id`) VALUES ('$person[id]','$person[name]','$person[address]')";
        $result = executeSQL($sql);
        return $result;
    }
    function getcompanyidbypersonid($personid)
    {
    $sql="SELECT `company id` FROM `executiveinfo` WHERE `personid`='$personid'";
    $result= executeSQL($sql);
    $seat= mysqli_fetch_assoc($result);
    return $seat;
    }
    function removeexecutive($personId)
    {
        $sql = "DELETE FROM `executiveinfo` WHERE `personid`='$personId'";        
        $result = executeSQL($sql);
        return $result;
    }
  
    
?>
