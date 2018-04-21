<html>
    <head>
        <title>
            Update Flight
        </title>
    </head>
    <body>
        
         <?php include("airLineName.php"); ?>
        
        <fieldset>
            <font color="#04B5C1">
	<font face ="Garamond">
	<h2>
	<span style="margin-left:22em"></span>
	<b>Update Flight</b>
	</h2>
	<hr>
        <br>
        <span style="margin-left:24em"></span>
        <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:3.5em"></span>
                    Flight ID
	<font face ="Garamond">
        <span style="margin-left:1.5em"></span>
        <input name="AddFlight" value="  Add Flight" type="textbox"   style="height:40px; width:150px ;color:#188418" />
	
	<input name="Search" value=" Search" type="button" onclick="Search()"   style="height:40px; width:100px ;color:#188418" />
	 <div style="color:#FA1B0C ; margin-left: 34em" id="firstNameDiv"></div>
         <form method="POST" name="Updateform">
         <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                    <span style="margin-left:27.5em"></span>
                    Date
            <span style="margin-left:3.2em"></span>        
          <input name="Date" value=" Date" type="Date"  style="height:40px; width:150px ;color:#188418" />
          <br>
         <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                    <span style="margin-left:27.5em"></span>
                    Time
            <span style="margin-left:3.1em"></span>        
          <input name="Time" value=" Time" type="textbox"  style="height:40px; width:150px ;color:#188418" />
          <br>
         <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                    <span style="margin-left:27.5em"></span>
                    Price
            <span style="margin-left:3.1em"></span>        
          <input name="Price" value=" Price" type="textbox"  style="height:40px; width:150px ;color:#188418" />
          <br>
         <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                    <span style="margin-left:27.5em"></span>
                    Total Seat
            <span style="margin-left:1.2em"></span>        
          <input name="TotalSeat" value=" Total Seat" type="textbox"  style="height:40px; width:150px ;color:#188418" />
          <br>
          
          </br>
          <input name="setflight" value="  Add Flight" type="textbox" hidden  style="height:40px; width:150px ;color:#188418" />
          <span style="margin-left:30em"></span> 
          <input name="Update" value="Update" type="Button" onclick="Hello()" disabled  style="height:40px; width:250px ;color:#188418" />
          
         
         
        </fieldset>
        </form>
    </body>
</html>
<script>
    var flightidflag=false;
    function Search()
    {
        var cobj=document.getElementsByName("AddFlight")[0];
        var divflight=document.getElementById("firstNameDiv");
     
        var xmlreq= new XMLHttpRequest();
        xmlreq.open('GET',"getAllflights.php",true);
        xmlreq.send();
        var exid=cobj.value;
        console.log(exid);
        if(isEmpty(exid))
        {
            divflight.innerHTML="Input a flightid";
            document.getElementsByName("Update")[0].disabled=true;
            flightidflag=false;
           
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
                                 
                                    
                                    divflight.innerHTML="Flights found";
                                    document.getElementsByName("Date")[0].value=jsondata[i].Date;
                                    document.getElementsByName("Time")[0].value=jsondata[i].time;
                                    document.getElementsByName("Price")[0].value=jsondata[i].price;
                                    document.getElementsByName("TotalSeat")[0].value=jsondata[i]["total seat"];
                                    document.getElementsByName("setflight")[0].value=jsondata[i]["flight id"];
                                    document.getElementsByName("Update")[0].disabled=false;
                                    
                                    flightidflag=true;
                                    callback(flightidflag);
                                    break;
                                    
                             }
                             else
                             {
                                 divflight.innerHTML="Flights not Found";
                                 document.getElementsByName("Update")[0].disabled=true;
                                 flightidflag=false;
                                 callback(flightidflag);
                             }
                         }
                      
                   }
               }
       }
    }
     function Hello()
     {
            var formobj=document.getElementsByName("Updateform")[0];
            formobj.action="updateflightresponse.php";
            formobj.submit();
     }
    function isEmpty(str)
       {
       return (!str || 0 === str.length);
        }
 </script>