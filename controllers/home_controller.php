<?php

    class HomeController{
          public function home()
        {
            require_once ("view/adminHeader.php");
            
           if(isset($_GET['employees']) == 'Employee Management')
           {
            require_once ("view/adminHeader.php");
               header("Refresh:0; url=?controller=stylist&action=allStylist");

           }
           else if(isset($_GET['customers']) == 'Customers Management')
           {
            require_once ("view/adminHeader.php");
               header("Refresh:0; url=?controller=customer&action=allCustomers");

           }
           else if(isset($_GET['services']) == 'View Services')
           {
            require_once ("view/adminHeader.php");
               header("Refresh:0; url=?controller=service&action=allServices");

           }
           else if(isset($_GET['report']) == 'View Reports')
           {
            require_once ("view/adminHeader.php");
               header("Refresh:0; url=?controller=report&action=bookings");

           }

        }
    }




?>

