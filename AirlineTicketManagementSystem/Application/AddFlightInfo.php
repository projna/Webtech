<?php require_once "../DataService/Executive_service.php"; ?>
<?php
    if ( !isset($_SESSION) )
    { session_start(); 
    
    } 
    $_SESSION["paytype"]="card";
     
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
     
           
        
else 
{
        $resl=getcompanyidbypersonid($_SESSION["username"]);
	$i=$_SESSION["persontype"];
	if($i=="02")
            
    { ?>
<html>
    <head>
        <title>
            Add Flights
        </title>
    </head>
    <body>
        <html>
    <title>
        Flightlist
    </title>
    <body>
        
        <form name="FlightForm" method="POST">
        <?php include("airLineName.php"); ?>
        <table>
            <tr>
                <fieldset>
                    <font color="#0CCFFA"/>
                   <font face ="Garamond"/>
                   <h2>
                   <span style="margin-left:22em"></span>
                   <b>
                       Add Flight Info
                        <span style="margin-left:50.5em"></span>
                   </b>
                   </h2>  
                   <hr>
                   
                  <br><br>
                    <font color="#25DCD6 "/>
                    <font face ="Garamond"/>
                    <span style="margin-left:4.5em"></span>
                   Flight Id
                   <font color="#25DCD6 "/>
                    <font face ="Garamond"/>
                    <span style="margin-left:42.5em"></span>
                   Departure Date
                    <br>
                    <span style="margin-left:4.5em"></span>
                    <input name="FlightID"  onfocusout="flightidchechk()"  type="textbox" style="height:40px; width:250px ; color:#474B4C"/>
                    <span style="margin-left:30em"></span>
                    <input name="Date" value="Date" type="date" onfocusout="date()"  min="2017-09-20" value="<?php echo date('Y-m-d');?>"  style="height:40px; width:250px ; color:#2F7B79"/>
                    
                    <br></br>
                    <span style="margin-left:4.5em"></span>
                    <input name="CompanyName" type="textbox" readonly value="<?php echo $resl["company id"]; ?>"  style="height:40px; width:250px ; color:#474B4C">
				
                     <span style="margin-left:30em"></span>
                    <input name="TotalSeat" value="Total Seat" onfocusout="TotalSeatfunc()" type="textbox" style="height:40px; width:250px ; color:#2F7B79"/>
                    
                    <br></br>
                    <span style="margin-left:4.5em"></span>
                     <select name="Departure" onfocusout="depart()" style="height:40px; width:250px ; color:#474B4C">
				<option>Departure Airport</option>
				<option>Dhaka </option>
				<option>Sylhet </option>
				<option>Chittagong </option>
				<option>Coxs Bazar</option>
				<option>Saidpur</option>
                                <option>Rajshahi</option>
                                <option>Jessore</option>
				</select>
                     <span style="margin-left:30em"></span>
                    <input name="time1" value="Departure Time" onfocusout="timecheck()" type="time" style="height:40px; width:250px ; color:#2F7B79"/>
                    
                    <br></br>
                    <span style="margin-left:4.5em"></span>
                     <select name="Arrival" onfocusout="arrival()"  style="height:40px; width:250px ; color:#474B4C">
				<option>Arrival Airport</option>
				<option>Dhaka </option>
				<option>Sylhet </option>
				<option>Chittagong </option>
				<option>Coxs Bazar</option>
				<option>Saidpur</option>
                                <option>Rajshahi</option>
                                <option>Jessore</option>
				</select>
                    
                    <span style="margin-left:30em"></span>
                    <input name="Price" value="Price" onfocusout="pricetag()" type="textbox" style="height:40px; width:250px ; color:#2F7B79"/>
                    <br></br>
                    <div name="flightdiv" > </div>
                    <br>
                    <span style="margin-left:70em"></span>
                    <input name="OK" value="OK" onclick="checkall()" type="Button" style="height:40px; width:150px ; color:#2B6C08"/>
        
                </fieldset>
        </form>
    </body>
</html>
<script>
    var dateflag=false;
    var departflag=false;
    var arrivalflag=false;
    var timeflag=true;
    var priceflag=false;
    var seatflag=false;
    var flightidflag=false;
 function timecheck()
 {
     var timeobj=document.getElementsByName("time1")[0].value;
     if(isEmpty(timeobj))
     {
         dateflag=false;
         
     }
     else
     {
         
         dateflag=true;
     }
 }
 function TotalSeatfunc()
 {
     var totalseat=document.getElementsByName("TotalSeat")[0].value;
     if(isEmpty(totalseat))
     {
         seatflag=false;
         
     }
     else
     {
         if(isLetter(totalseat)==false)
         {
             seatflag=true;
             
             
         }
         else
         {
             seatflag=false;
         }
     }
 }
 function pricetag()
 {
     var priceobj=document.getElementsByName("Price")[0].value;
     if(isEmpty(priceobj))
     {
         priceflag=false;
         
     }
     else
     {
         if(isLetter(priceobj)==false)
         {
             priceflag=true;
             
             
         }
         else
         {
             priceflag=false;
         }
     }
 }
 function date()
 {
     var dateobj=document.getElementsByName("Date")[0].value;
     if(isEmpty(dateobj))
     {
         dateflag=false;
         
     }
     else
     {
         dateflag=true;
     }
     
 }

 function depart()
 {
     var cobj=document.getElementsByName("Departure")[0].value;
     if(cobj!="Departure Airport")
     {
         departflag=true;
         console.log("dename");
     }
     else
     {
         departflag=false;
     }
 }
 function arrival()
 {
     var cobj=document.getElementsByName("Arrival")[0].value;
     if(cobj!="Arrival Airport")
     {
         arrivalflag=true;
         console.log("mane");
     }
     else
     {
         arrivalflag=false;
     }
 }
 function flightidchechk()
 {
     
     var cobj=document.getElementsByName("FlightID")[0];
     var divflight=document.getElementsByName("flightdiv")[0];
     
     var xmlreq= new XMLHttpRequest();
        xmlreq.open('GET',"allflightid.php",true);
        xmlreq.send();
        var exid=cobj.value;
        console.log(exid);
        if(isEmpty(exid))
        {
            divflight.innerHTML="Input a flightid";
            flightidflag=true;
           
        }
        else
        {
            flightidflag=callback(flightidflag);
            
        }
     
     
     
     function callback(flag)
       {
           ajax();
           return flag;
       }
       function ajax()
       {
           xmlreq.onreadystatechange=function()
               {
                   if(xmlreq.readyState==4)
                   {
                       var jsondata=JSON.parse(xmlreq.responseText);
                       console.log(jsondata);
                       
                       for(var i=0;i<jsondata.length;i++)
                         {
                              if(jsondata[i]["flight id"]==exid)
                             {
                                    divflight.innerHTML="flightid already available";
                                    flightidflag=false;
                                    callback(flightidflag);
                                    break;
                                    
                             }
                             else
                             {
                                 divflight.innerHTML="flightid correct";
                                 
                                 flightidflag=true;
                                 callback(flightidflag);
                             }
                         }
                      
                   }
               }
       }
 }
 function checkall()
 {
     

     if( dateflag==true   && departflag==true &&  timeflag==true && priceflag==true && seatflag==true && flightidflag==true )
     {
         var formobj=document.getElementsByName("FlightForm")[0];
         formobj.action="addflightresponse.php";
         formobj.submit();
     }
     else
     {
         alert("Error");
     }
 }
 function isLetter(c) 
       {
        return c.toLowerCase() != c.toUpperCase();
       }
   function isEmpty(str)
       {
       return (!str || 0 === str.length);
        }
</script>
    
<?php
}
	else
	{
		header("location:AirTicketOnline.php");
	}
}
?>