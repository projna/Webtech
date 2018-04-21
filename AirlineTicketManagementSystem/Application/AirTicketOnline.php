<?php require_once "../DataService/person_service.php"; ?> 
<?php
    if(isset($_COOKIE["USERNAME"]))
    {
        if ( !isset($_SESSION) )
        { session_start(); }
        $name=$_COOKIE["USERNAME"];
        $perSondetails= getPersonById($name);
    $_SESSION["username"]=$perSondetails["id"];
    $_SESSION["Name"]=$perSondetails["name"];
    $_SESSION["Address"]=$perSondetails["address"];
    $_SESSION["dob"]=$perSondetails["DOB"];
    $_SESSION["Email"]=$perSondetails["email"];
    $_SESSION["Phone"]=$perSondetails["phn"];
    $_SESSION["persontype"]=$perSondetails["persontypeid"];
    }
?>
<html>
	<head>
		<title>Book Air Ticket Online</title>
	</head>
	<style>
body {
    background-color: #1B2631;
	 }
</style>
		<body>

		
		 <form method="post" name='Form'>
		 <?php
                 
		 include_once("airLineName.php");
		 ?>
				
				
				<?php
                                
                                if(isset($_SESSION["persontype"])==FALSE)
                                {
                                  include("clientSideChoiceFlightPart.php");  
                                }
                                
                                else
                                {
                                    $i=$_SESSION["persontype"];
                                    if($i=="01")
                                    {
                                        include("clientSideChoiceFlightPart.php");
                                    }
                                    else if($i=="02")
                                    {
                                        include("ExecutiveControl.php"); 
                                    }
                                    else if($i=="03")
                                    {
                                        include("adminSideChoicePart.php");
                                    
                                    }
                                }
				?>
				<?php
				include("AirTicketOnlineSlider.php");
				?>
				
		</form>
		</body>
</html>

<script>
     var toeventflag=false;
     var formflag=false;
     var toflag=false;
     var passflag=false;
     
    function boom()
    {
        
        var objairline=document.getElementsByName("Airline")[0];
        var selectcompany=objairline.value;
        var senddata="name="+selectcompany;
        if(selectcompany!=="--Select Airline--")
        {
 
            var objxml= new XMLHttpRequest();
            objxml.open("POST","ForSelectingFrom.php",true);
            objxml.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            objxml.onreadystatechange=function()
            {
                if(objxml.readyState==4)
                {
                    /*var data=JSON.parse(objxml.responseText);
                    console.log(data);*/
                    var data=objxml.responseText;
                    jsondata=JSON.parse(data);
                    var selectform=document.getElementsByName("FROM")[0];
                    selectform.disabled=false;
                    
                    selectform.options.length = 0;
                    var option=document.createElement("option");
                        option.text="Select Departure";
                        selectform.add(option);
                    for(var i=0;i<jsondata.length;i++)
                    {
                        var option=document.createElement("option");
                        option.text=jsondata[i].departure;
                        selectform.add(option);
                    }
                }
            }
            objxml.send(senddata);
            formflag=true;
        }
        else
        {
            var selectform=document.getElementsByName("FROM")[0];
            selectform.options.length = 0;
            selectform.disabled=true;
            var selectto=document.getElementsByName("TO")[0];
            selectto.disabled=true;
            selectto.options.length = 0;
            formflag=false;
            
        }
       
        
    }
     function boomto()
    {   
        
      
        var objairline=document.getElementsByName("Airline")[0];
        var selectcompany=objairline.value;
        var objform=document.getElementsByName("FROM")[0];
        var selectfrom=objform.value;
       if(selectfrom!=="Select Departure")
       {
        var senddatato="name="+selectfrom+"&airline="+selectcompany;
        
            var objxml= new XMLHttpRequest();
            objxml.open("POST","Forselectingto.php",true);
            objxml.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            objxml.onreadystatechange=function()
            {
                if(objxml.readyState==4)
                {
                    
                    var data=objxml.responseText;
                    jsondatato=JSON.parse(data);
                    console.log(jsondatato);
                   var selectto=document.getElementsByName("TO")[0];
                    selectto.disabled=false;
                    selectto.options.length = 0;
                    var option=document.createElement("option");
                        option.text="Select arrival";
                        selectto.add(option);
                    for(var i=0;i<jsondatato.length;i++)
                    {
                        var option=document.createElement("option");
                        option.text=jsondatato[i].arrival;
                        selectto.add(option);
                    }
                }
                
            }
            objxml.send(senddatato);
            toflag=true;
            
        }
        else
        {
            console.log("From Boom to else");
            var selectto=document.getElementsByName("TO")[0];
            selectto.disabled=true;
            selectto.options.length = 0;
            toflag=false;
            toeventflag=false;
        }
        if(toflag==true)
        {
            return true;
        }
        else
        {
            
            return false;
        }
        
       
        
    }
    function eventforto()
    {
        var selectto=document.getElementsByName("TO")[0];
        var data=selectto.value;
        console.log(data);
        if(isEmpty(data))
        {
            toeventflag=false;
            
        }
        else
        {
            if(data==="Select arrival")
            {
                toeventflag=false;
              
            }
            else
            {
                
                toeventflag=true;
            }
            
        }
    }
    function check()
    {
       
        if(formflag==true && toeventflag==true && toflag==true && passflag==true)
        {
            alert("Everthing Seems ok");
            var formobj=document.getElementsByName("Form")[0];
            formobj.action="Flightlist.php";
            formobj.submit();
            
        }
        else
        {
            alert("Try Again");
        }
    }
    function CheckDate()
    {
        
        var dateobj=document.getElementsByName("Departure")[0];
        
    }
    function passenger()
    {
        var passgobj=document.getElementsByName("Passenger")[0];
        var val=passgobj.value;
        if(val==="Passenger ")
        {
            passflag=false;
        }
        else
        {
            passflag=true;
        }
    }
    function isEmpty(str)
       {
       return (!str || 0 === str.length);
        }
</script>


