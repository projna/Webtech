<?php include_once("dataAccess.php"); ?>
<?php
function getdeparturebycompanyid($companyid)
{
    //$sql='SELECT * FROM `flight` WHERE `company id`="$companyid"';
    $sql="SELECT `departure` FROM `flight` WHERE `company id`='$companyid' GROUP BY `departure`";
    $result= executeSQL($sql);
    $departure = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
        {
            $departure[$i] = $row;
        }
        
        return $departure;
}
function getarrivalbycompanyidanddeparture($companyid,$departure)
{
    $sql="SELECT `arrival` FROM `flight` WHERE `departure`='$departure' AND `company id`='$companyid' GROUP BY `arrival`";
    $result= executeSQL($sql);
    $arrival = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
        {
            $arrival[$i] = $row;
        }
        
        return $arrival;
    
}
function getAllflightsbyiddeparturearrivaldate($companyid,$from,$to,$date,$number)
{
    $sql="SELECT * FROM `flight` WHERE `company id`='$companyid' AND `departure`='$from' AND `arrival`='$to' AND `Date`='$date' AND `total seat`>$number";
    $result= executeSQL($sql);
    $flightlist=array();
    for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
        {
            $flightlist[$i] = $row;
        }
        
        return $flightlist;
    

}
function getFlightinfoByid($FlightId)
{
    $sql="SELECT * FROM `flight` WHERE `flight id`='$FlightId'";
    $result= executeSQL($sql);
    $flight= mysqli_fetch_assoc($result);
    return $flight;
}
function getallflights()
{
    $sql="SELECT * FROM `flight`";
    $result= executeSQL($sql);
    $flightlists=array();
    for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
        {
            $flightlists[$i] = $row;
        }
        
        return $flightlists;
}
function getallflightsbycompanyids($companyid)
{
    
    $sql="SELECT * FROM `flight` WHERE `company id`='$companyid'";
    $result= executeSQL($sql);
    $flightlists=array();
    for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
        {
            $flightlists[$i] = $row;
        }
        
        return $flightlists;
}
function getTotalseatbyflightid($Flightid)
{
   
    $sql="SELECT `total seat` FROM `flight` WHERE `flight id`='$Flightid'";
    $result= executeSQL($sql);
    $seat= mysqli_fetch_assoc($result);
    return $seat;
}
function updateseatbyid($Flightid,$seat)
{
    $sql="UPDATE `flight` SET `total seat`='$seat' WHERE `flight id`='$Flightid'";
    $result= executeSQL($sql);
    return $result;
}
 function getallflightid()
    {
        $sql="SELECT `flight id` FROM `flight`";
               
        $result = executeSQL($sql);
        
        $exid = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
        {
            $exid[$i] = $row;
        }
        
        return $exid;
    }
    
    function addflight($person)
    {
        $sql = "INSERT INTO `flight`(`flight id`, `company id`, `departure`, `arrival`, `price`, `total seat`, `Date`, `time`) VALUES ('$person[id]','$person[name]','$person[address]','$person[DOB]','$person[password]','$person[persontypeid]','$person[email]', '$person[phn]')";
        $result = executeSQL($sql);
        return $result;
    }
    function removeflight($flightid){
        $sql = "DELETE FROM `flight` WHERE `flight id`='$flightid'";        
        $result = executeSQL($sql);
        return $result;
    }
    function editflights($flight)
    {
        
        $sql = "UPDATE `flight` SET `price`='$flight[price]',`total seat`='$flight[seat]',`Date`='$flight[date]',`time`='$flight[time]' WHERE `flight id`='$flight[id]'";
        $result = executeSQL($sql);
        return $result;
    }
?>

