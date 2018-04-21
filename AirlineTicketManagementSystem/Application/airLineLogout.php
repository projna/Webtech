<html>
	<fieldset>
		 
                     <style>
                    body {
                        background-color: #1B2631;
                             }
                    </style>
			<h1 >
                            
				<font color="#CACFD2">
					<font face ="Garamond">
                                        <p style="font-size:30px;" >
						<span style="margin-left:4.5em"></span>
                                                <b onclick="HomePage()">BD AirGo</b> 
					</font>
				    </font>
                                    
				</font>
				<span style="margin-left:18.5em"></span>
                                <input name="Book" value="Book" type="button" onclick="existingbook()" style="height:40px; width:120px ;color:#1F2E9B" />
                                <input name="MyTrip" value="My Trip" type="button" onclick="cartButton()" style="height:40px; width:120px ;color:#1F2E9B" />
                                <input name="Profile" value="Profile" type="button" onclick="SignUpButton()" style="height:40px; width:120px ;color:#1F2E9B;" />
                                </h1>
	</fieldset>
</html>
<script>
    function loginbutton()
    {
    var url="UserLoginPage.php";
    window.location.href=url;
    }
    function existingbook()
    {
        var url="Existingbooking.php";
        window.location.href=url;
    }
    function cartButton()
    {
        var url="cart.php";
        window.location.href=url;
    }
    function SignUpButton()
    {
       var url="PersonalDetails.php";
       window.location.href=url; 
    }
    function HomePage()
    {
        var url="AirTicketOnline.php";
       window.location.href=url;
    }
</script>