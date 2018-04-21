<?php include_once("dataAccess.php"); ?>
<?php
    function addsale($booking)
    {
        $sql = "INSERT INTO `Sale`(`flightid`, `userid`, `companyname`, `issuedate`, `amount`, `paymenttype`) VALUES  ('$booking[fid]','$booking[pid]','$booking[cname]','$booking[isdate]','$booking[taka]','$booking[payp]')";
        $result = executeSQL($sql);
        return $result;
    }
    function allsale()
    {
        
        $sql = "SELECT * FROM `sale`";        
        $result = executeSQL($sql);
        
        $sale = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $sale[$i] = $row;
        }
        
        return $sale;
    }
    function allsalebycompany($companyname){
        
        $sql = "SELECT * FROM `sale` WHERE `companyname`='$companyname'";        
        $result = executeSQL($sql);
        
        $sale = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $sale[$i] = $row;
        }
        
        return $sale;
    }
    
?>

