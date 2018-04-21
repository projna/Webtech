<html>
    <fieldset>
         <font color="#7FD128"/>
	<font face ="Garamond"/>
	<h2>
	<span style="margin-left:25em"></span>
        Admin Sale
        </h2>
        <hr>
        <br>
        <font color="#CACFD2"/>
	<font face ="Garamond"/>
        <span style="margin-left:35.5em"></span>
        <br></br>
				<font color="#CACFD2">
				<span style="margin-left:35em"></span>
				<input name= "SaleReportChoice" type ="radio" value="Full Sale Report" onclick="fullSale()"  style="color: #15CA8E"  /> Full Sale Report
                                <br>
				<span style="margin-left:35em"></span> 
				<input  name= "SaleReportChoice" type ="radio" onclick="company()"  value="Sale Report By Company" style="color: #15CA8E" />Sale Report By Company
                                
        
    </fieldset>    
</html>
<script>
    
function fullSale()
{
    var url="TotalSale.php";
    window.location.href=url;
}
function company()
{
    var url="Adminsalesection02.php";
    window.location.href=url;
}
</script>