<?php

if(isset($_GET['signout']))
    {
    session_destroy();
    header("location:loginPage.php");

    }


?>