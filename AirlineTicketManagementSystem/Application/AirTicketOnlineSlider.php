<html>
    <head>
	<fieldset>
        <script>
            var count=0;
            function slide(){
                if(++count>4){ count = 1; }

                var img = document.getElementsByTagName("img")[0];
                img.src = "flightspicture/" + count + ".png";
            }
        </script>
    </head>
    <body>
        <!--Image Container-->
        <img height="352">
        <!--Calling the slide method with an interval of 1 seconds-->
        <script>
            window.setInterval(slide, 2000);
        </script>
    </body> 
</fieldset>	
</html>