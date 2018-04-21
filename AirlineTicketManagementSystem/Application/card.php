<?php
    if ( !isset($_SESSION) )
    { session_start(); 
    
    } 
    $_SESSION["paytype"]="card";
     
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
     
           
        
else {?>
<html>
    <title>
        Card Payment
    </title>
    <body>
        <?php include("airLineName.php");?>
        <?php include("paymentOption.php");?>
        <fieldset>
            
        <font color="#7FD128"/>
	<font face ="Garamond"/>
	<h3>
	<span style="margin-left:30em"></span>
	<b>Card Payment</b>
        	</h3>

        <hr>
        <br>
        <select name="Card" onchange="Card()" style="height:40px; width:150px;margin-left:5em; color:#1F2E9B">
				<option>Card Choices </option>
				<option>AMAX Card</option>
				<option>Master Card </option>
				<option>Visa Credit Card</option>
				<option>Visa Debit Card</option>
				</select>
        <font color="#D0C829 "/>
        <br>
        </br>
	<font face ="Garamond"/><span style="margin-left:4.2em"></span>
	Card Number
        <font face ="Garamond"/><span style="margin-left:30em"></span>
	CVV(Last Three Digits of Card)
	<br>
	<span style="margin-left:4.2em"></span>
        <input name="cardNumber"  type="textbox" onfocusout="userNameCheck()" style="height:40px; width:250px ; color:#474B4C"/>
     
        <span style="margin-left:19.5em"></span>
        <input name="Last3DigitsOfTheCard"  type="textbox" onfocusout="userNameCheck()" style="height:40px; width:250px ; color:#474B4C"/>
       
        <br>
        </br>
        <font face ="Garamond"/><span style="margin-left:4.2em"></span>
	Expiry Date
         <font face ="Garamond"/><span style="margin-left:30.5em"></span>
	Email Of The Card Holder
	<br>
        <span style="margin-left:4.2em"></span>
        <input name="Expiry Date" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>"  type="date" onfocusout="userNameCheck()" style="height:40px; width:250px ; color:#474B4C"/>
        <span style="margin-left:19.5em"></span>
        <input name="EmailOfTheCardHolder"  type="textbox" onfocusout="userNameCheck()" style="height:40px; width:250px ; color:#474B4C"/>
       
        <br></br>
        <font face ="Garamond"/><span style="margin-left:4.2em"></span>
	Card Holder Name
         <font face ="Garamond"/><span style="margin-left:27.5em"></span>
	Card Holder's Phn Number As In the Bank
        <br>
        <span style="margin-left:4.2em"></span>
        <input name="CardHoldersName"   type="textbox" onfocusout="userNameCheck()" style="height:40px; width:250px ; color:#474B4C"/>
       <span style="margin-left:19.5em"></span>
        <input name="CardHoldersPhnNumber" value="Phone Number"  type="textbox" onfocusout="userNameCheck()" style="height:40px; width:250px ; color:#474B4C"/>
       
        <br>
         </br>
         <br>
         
         </br>
        <span style="margin-left:65em"></span>
        <input name="Go" value="GO "  type="Button" onclick="check()" style="height:40px; width:150px ; color:#1A682E"/>
         
      
        </fieldset>
        
    </body>
        
</html>
<script>
   function check()
   {
       var cardselectobj=document.getElementsByName("Card")[0].value;
       var cardsnumberobj=document.getElementsByName("cardNumber")[0].value;
       var vccobj=document.getElementsByName("Last3DigitsOfTheCard")[0].value;
       var dateobj=document.getElementsByName("Expiry Date")[0].value;
       var emailobj=document.getElementsByName("EmailOfTheCardHolder")[0].value;
       var nameobj=document.getElementsByName("CardHoldersName")[0].value;
       var phnobj=document.getElementsByName("CardHoldersPhnNumber")[0].value;
       var cardflag=false;
       var cardnumberflag=false;
       var vccflag=false;
       var emailflag=false;
       var name=false;
       var phn=false;
       if(cardselectobj!="Card Choices ")
       {
           cardflag=true;
       }
       if(isEmpty(cardsnumberobj)==false)
       {
           cardnumberflag=true;
       }
       if(isEmpty(vccobj)==false && vccobj.length<4)
       {
           vccflag=true;
       }
       if(isEmpty(emailobj)==false)
       {
           emailflag=true;
       }
       if(isEmpty(nameobj)==false)
       {
           name=true;
       }
       if(isEmpty(phnobj)==false)
       {
           phn=true;
       }
       if(cardflag==true && cardnumberflag==true && vccflag==true && emailflag==true && name==true && phn==true )
       {
         
            
           var url="Salereport.php";
           window.location.href=url;
       }
       else
       {
           alert("Wrong Information");
       }
       
   }
   function isEmpty(str)
       {
       return (!str || 0 === str.length);
        }
       function isLetter(c) 
       {
        return c.toLowerCase() != c.toUpperCase();
       }
</script>
 <?php    } ?>