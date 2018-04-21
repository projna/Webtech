<?php include_once("dataAccess.php"); ?>
<?php
    function addPerson($person){
        $sql = "INSERT INTO `person`(`id`, `name`, `address`, `DOB`, `password`, `persontypeid`, `email`, `phn`) VALUES ('$person[id]','$person[name]','$person[address]','$person[DOB]','$person[password]','$person[persontypeid]','$person[email]', '$person[phn]')";
        $result = executeSQL($sql);
        return $result;
    }
    
    function editPerson($person){
        $sql = "UPDATE `person` SET `id`='$person[id]',`name`='$person[name]',`address`='$person[address]',`DOB`='$person[DOB]',`password`='$person[password]',`persontypeid`='$person[persontypeid]',`email`='$person[email]',`phn`='$person[phn]' WHERE id=$person[id]";
        $result = executeSQL($sql);
        return $result;
    }
    
    function removePerson($personId){
        $sql = "DELETE FROM `person` WHERE `id`='$personId'";        
        $result = executeSQL($sql);
        return $result;
    }
    
    function getAllPersons(){
        $sql = "SELECT * FROM `person`";        
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }
     function getAllPersonsbyexceptpersontypeid($persontypeid){
        $sql = "SELECT * FROM `person` WHERE `persontypeid`<>'$persontypeid'";        
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }
    
    function getAllPersonsID(){
        $sql = "SELECT `id` FROM `person`";        
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }
    
    function getPersonById($personId){
        $sql = "SELECT * FROM `person` WHERE id='$personId'";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    }
     function getPersonPasswordById($personId)
    {
        $sql = "SELECT `password` FROM `person` WHERE id='$personId'";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    }
    
    function getPersonsByName($personName){
        $sql = "SELECT * FROM `person` WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }
    function updateparsonasadmin($personid){
        $sql = "UPDATE `person` SET `persontypeid`='03' WHERE id='$personid'";
        $result = executeSQL($sql);
        return $result;
    }
     function updateparsonasexecutive($personid){
        $sql = "UPDATE `person` SET `persontypeid`='02' WHERE id='$personid'";
        $result = executeSQL($sql);
        return $result;
    }
    function updateparsonclient($personid){
        $sql = "UPDATE `person` SET `persontypeid`='01' WHERE id='$personid'";
        $result = executeSQL($sql);
        return $result;
    }
    function getAllpersonbypersontypeid($persontypeid)
    {
       
        $sql = "SELECT * FROM `person` WHERE `persontypeid`='$persontypeid'";        
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }
?>