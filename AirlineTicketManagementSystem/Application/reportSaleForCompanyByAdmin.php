<html>
    <head>
        <title>
            Report Sale For Company By Admin
        </title>
    </head>
    <body>
        <fieldset>
            <font color="#7FD128"/>
	<font face ="Garamond"/>
	<h2>
	<span style="margin-left:20em"></span>
       Report Sale For Company By Admin
        </h2>
        <hr>
        <br>
        <font color="#CACFD2">
				<span style="margin-left:35em"></span>
                                <input name= "AirlineName" type ="radio" value="US BANGLA" onclick="us()" style="color: #15CA8E"  /> US BANGLA
                                <br>
				<span style="margin-left:35em"></span> 
				<input  name= "AirlineName" type ="radio"  value="NOVOAIR" onclick="novo()" style="color: #15CA8E" />NOVOAIR
                                <br>
                                <span style="margin-left:35em"></span> 
				<input  name= "AirlineName" type ="radio"  value="Regent Airways" onclick="reg()"  style="color: #15CA8E" />Regent Airways
                                <br>
                                <span style="margin-left:35em"></span> 
				<input  name= "AirlineName" type ="radio"  value="Biman Bangladesh" onclick="biman()"  style="color: #15CA8E" />Biman Bangladesh
                                <br>
                                <span style="margin-left:35em"></span> 
				<input  name= "AirlineName" type ="radio"  value="Easy Fly Exprex Airways" onclick="easy()"  style="color: #15CA8E" />Easy Fly Exprex Airways
                                
        </fieldset>
            
    </body>
</html>  
<script>
    function us()
    {
        var url="TotalSale.php?id=US BANGLA";
        window.location.href=url;
    }
    function novo()
    {
        var url="TotalSale.php?id=NOVOAIR";
        window.location.href=url;
    }
    function reg()
    {
        var url="TotalSale.php?id=REGENT AIRWAYS";
        window.location.href=url;
    }
    function biman()
    {
        
        var url="TotalSale.php?id=Biman Bangladesh";
        window.location.href=url;
    }
    function easy()
    {
        var url="TotalSale.php?id=EASY FLY EXPRESS";
        window.location.href=url;
    }
</script>