<?php

include ('BookingOptions.php');
class Booking {
    
    public $booking_ID;
    public $user_ID;
    public $booking_date;
    public $timeframe_description;
    public $stylist_firstName;
    public $hairstyle_description;
    public $booking_status;

    public function __construct($booking_ID,$user_ID,$booking_date,$timeframe_description,$stylist_firstName,$hairstyle_description,$booking_status) {
		//constructing user
		
        $this->booking_ID = $booking_ID;
        $this->user_ID = $user_ID;
        $this->booking_date = $booking_date;
        $this->timeframe_description = $timeframe_description;
        $this->stylist_firstName = $stylist_firstName;
        $this->hairstyle_description = $hairstyle_description;
        $this->booking_status = $booking_status;




    	}

    
        /*public static function makeBookings($strtDate,$endDate){


        }*/
    
    public static function getBookings($userID,$strtDate,$endDate){

        $list = array();
      		$db = Db::getInstance();
              $sql = "SELECT b.booking_ID,u.user_firstName,b.booking_date,t.timeframe_description,s.stylist_firstName,h.hairstyle_description,b.booking_status
              FROM  booking b,stylist s,hairstyle h,timeframe t,user u
              WHERE b.stylist_ID = s.stylist_ID
              AND   b.user_ID = u.user_ID
              AND   b.hairstyle_ID = h.hairstyle_ID
              AND   b.timeframe_ID = t.timeframe_ID
              AND   b.booking_date BETWEEN '$strtDate' AND '$endDate'
              AND   u.user_ID = $userID
              ORDER BY b.booking_date DESC";
			
			$req = $db->query($sql);
			
				// we create a list of booking objects from the database results
				foreach ($req->fetchAll() as $booking) {
					$list[] = new Booking($booking['booking_ID'],$booking['user_firstName'],$booking['booking_date'],$booking['timeframe_description'],$booking['stylist_firstName'],
                    $booking['hairstyle_description'],$booking['booking_status']);
                                
				
				}
				return $list;
     }
     public static function getStylistBookings($userID,$strtDate,$endDate){

        $list = array();
      		$db = Db::getInstance();
              $sql = "SELECT b.booking_ID,u.user_firstName,b.booking_date,t.timeframe_description,s.stylist_firstName,h.hairstyle_description,b.booking_status
              FROM  booking b,stylist s,hairstyle h,timeframe t,user u
              WHERE b.stylist_ID = s.stylist_ID
              AND   b.hairstyle_ID = h.hairstyle_ID
              AND   b.user_ID = u.user_ID
              AND   b.timeframe_ID = t.timeframe_ID
              AND   b.booking_date BETWEEN '$strtDate' AND '$endDate'
              AND   s.stylist_ID = $userID
              ORDER BY b.booking_date DESC";
			
			$req = $db->query($sql);
				// we create a list of booking objects from the database results
				foreach ($req->fetchAll() as $booking) {
					$list[] = new Booking($booking['booking_ID'],$booking['user_firstName'],$booking['booking_date'],$booking['timeframe_description'],$booking['stylist_firstName'],
                    $booking['hairstyle_description'],$booking['booking_status']);
                                
				
				}
				return $list;
     }
     public static function cancelBooking($bookingID){
            $db = Db:: getInstance();
            
            $qry = "UPDATE booking SET booking_status = 'Canceled' WHERE booking_ID = '$bookingID'";
            //echo $qry;
            try {
                $db->query ($qry); 
                $_SESSION['MESSAGE'] = "Booking canceled";
            }
            catch (PDOException $e) 
            {
                $_SESSION['MESSAGE'] = "Status could not be updated";
            }
    }
    public static function approveBooking($bookingID){
        $db = Db:: getInstance();
        
        $qry = "UPDATE booking SET booking_status = 'Approve' WHERE booking_ID = '$bookingID'";
        //echo $qry;
        try {
            $db->query ($qry); 
            $_SESSION['MESSAGE'] = "Booking canceled";
        }
        catch (PDOException $e) 
        {
            $_SESSION['MESSAGE'] = "Status could not be updated";
        }
    }
    public static function Book($user, $date, $time, $hairstyle, $stylist) {	
        $status = "Pending";
        $db = Db:: getInstance();
        $qry = "INSERT INTO booking (user_ID,booking_date, timeframe_ID, hairstyle_ID, stylist_ID, booking_status) ";
        $qry.= " VALUES ('$user', '$date', '$time', '$hairstyle', '$stylist', '$status') ";
         
             $db->query ($qry); 
             
    }

    public static function findDuplicateDate($date,$user){

        
      		$db = Db::getInstance();
              $sql = "SELECT booking_date
              FROM  booking
              WHERE   booking_date = '$date'
              AND   user_ID = $user";
			
            $req = $db->query($sql);
            $count = 0;
            while ($req->fetchAll()) {

            $count++;
            }
			
			return $count;
     }
     public static function findAlreadyBookedStylist($date,$time,$stylist){

        
        $db = Db::getInstance();
        $sql = "SELECT b.booking_date,t.timeframe_ID,s.stylist_firstName
        FROM  booking b,timeframe t,stylist s
        WHERE b.timeframe_ID =  t.timeframe_ID 
        AND   b.stylist_ID = s.stylist_ID
        AND   b.booking_date = '$date'
        AND   t.timeframe_ID  = $time
        AND   s.stylist_firstName = $stylist";
      
      $req = $db->query($sql);
      $count = 0;
      while ($req->fetchAll()) {

      $count++;
      }
      
      return $count;
}


}
?>