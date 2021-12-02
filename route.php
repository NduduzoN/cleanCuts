<?php

/*
*
* This page is the core of controlling logic on the site
* It specifies which "routes" are available, e.g. 
* work with students using student_controller
* or work with lecturers using lecturer_controller
* It also specifies which options/actions - functionality are available
* within each controller check line 41
*
*/
  function call($controller, $action) {
	  //echo '<br> controller and action '.$controller.' '.$action;
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'home':
        $controller = new HomeController();
      break;
      case 'customer':
        $controller = new CustomerController();
        require_once('Model/customer.php');
      break;
      case 'stylist':
        	$controller = new StylistController();
      require_once('Model/stylist.php');
     	break;
        case 'service':
        	$controller = new ServiceController();
            require_once('Model/service.php');
     	break;
        case 'report':
        	$controller = new ReportController();
            require_once('Model/report.php');
     	break;
      
    case 'booking':
          // we need the model to query the database later in the controller
          $controller = new BookingController();
      require_once('model/booking.php');
        break;
        
    case 'login':
          $controller = new LoginController();
      require_once('model/user.php');
          break;
	
    }

    

session_start();
    $controller->{ $action }();
  }

  // List of all controllers and their available actions
  $controllers = array('home' => array('home'),
   'login' => array('viewteam','viewgallery','viewhome','signup','login','logout','signup','changePassword','changeStylistPassword','changeAdminPassword'),
    'booking'=>array('showBookings','showStylistBookings','makeBooking','bookingCancel','bookingApprove'),
    'stylist' => array('allStylist', 'editDetails','filterTable','deleteDetails','addNewUser'),
    'customer' => array('allCustomers','filterTable','editDetails','deleteDetails','newDetails','addNew'),
    'service' => array('allServices', 'filterTable', 'newDetails', 'editServices', 'deleteDetails'),
    'report' => array('bookings'));

  if (array_key_exists($controller, $controllers)) {
	  //check if action is defined for the specified controller...
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>
