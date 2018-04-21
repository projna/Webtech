<?php 
        session_start();
        session_destroy();
        setcookie("USERNAME", "SOme", time()-60);
        header("location:../index.php");
?>
