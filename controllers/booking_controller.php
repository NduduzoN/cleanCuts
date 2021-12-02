<?php
class BookingController{

            public function showBookings()
            {
                
                $userID = $_SESSION['user'];
                if(isset($_GET['search'])) {  

                    $strtDate = $_GET['txtStartDate'];
                    $endDate = $_GET['txtEndDate'];
                
                $bookings = Booking::getBookings($userID,$strtDate,$endDate);
                require_once ("view/clientHeader.php");
                include_once ('view/showBookings.php');
                }  
                else{

                $startDate = new DateTime('today');
		        $sDate = date_format($startDate,"Y-m-d");

                $endDate = new DateTime('next week');
                $eDate = date_format($endDate,"Y-m-d");

                $bookings = Booking::getBookings($userID,$sDate,$eDate);
                require_once ("view/clientHeader.php");
                include_once ('view/showBookings.php');
            }
            }

           public function showStylistBookings()
            {
                $userID = $_SESSION['userStylist'];

                if(isset($_GET['search'])) {  

                    $strtDate = $_GET['txtStartDate'];
                    $endDate = $_GET['txtEndDate'];
                    
                
                    $stylistbookings = Booking::getStylistBookings($userID,$strtDate,$endDate);
                include ('view/stylistHeader.php');
                include ('view/showStylistBookings.php');
                }  
                else{

                $startDate = new DateTime('today');
		        $sDate = date_format($startDate,"Y-m-d");

                $endDate = new DateTime('next week');
                $eDate = date_format($endDate,"Y-m-d");

                $stylistbookings = Booking::getStylistBookings($userID,$sDate,$eDate);
                include ('view/stylistHeader.php');
                include ('view/showStylistBookings.php');
            }
            }
            public function bookingOptions()
            {
                $time = BookingOptions::getTime();
                $hairstyle = BookingOptions::getHairstyle();
                $stylist = BookingOptions::getStylist();

                require_once ("view/clientHeader.php");
			

                include ('view/makeBooking.php'); 
                require_once ("footer.php");

                }

            
            public function makeBooking()
            {


                if(isset($_GET['book'])){
                $date = filter_input(INPUT_GET,'bdate');
                $time = filter_input(INPUT_GET,'time');
                $hairstyle =  filter_input(INPUT_GET,'hairstyle');
                $stylist = filter_input(INPUT_GET,'stylist');
                $user = $_SESSION['user'];
                 

                $stDate = new DateTime('tomorrow');
                $aDate = date_format($stDate,"Y-m-d");

                $duplicate = booking::findDuplicateDate($date,$user);
                $dupStylistBooking = booking::findAlreadyBookedStylist($date,$time,$stylist);

                /*$bDate =  getdate();
                        $day = $bDate['mday'];
                        $month = $bDate['mon'];
                        $year = $bDate['year'];

                        $startDate = $year. '/' . $month . '/'.$day;
                        $endDate = $year. '/' . $month . '/'.$day + 7;*/

                


                if($date &&  $time && $hairstyle && $stylist && $date > $aDate && $duplicate < 1 && $dupStylistBooking < 1){
                $book = booking::book($user, $date, $time, $hairstyle, $stylist);
                $this->bookingOptions();
                ?>
                    <script>
                        window.alert("Booking Successfull");

                    </script>
                    <?php
                }
                else
                    {
                    ?>
                    <script>
                        window.alert("Cant book the date/stylist is already booked");

                    </script>
                    <?php
                        $this->bookingOptions();
                    }
                }

                else
                {
                    $this->bookingOptions();
                    }
            }
            


            public function bookingCancel()
            {
                $bookingID = $_GET['cancel'];
                Booking::cancelBooking($bookingID);
                     ?>
                    <script>
                        window.alert("Booking Canceled");

                    </script>
                    <?php
                $this->showBookings();
                
                      

            }

            public function bookingApprove()
            {
                $bookingID = $_GET['approve'];
                Booking::approveBooking($bookingID);
                ?>
                    <script>
                        window.alert("Booking Approved");

                    </script>
                    <?php
                $this->showStylistBookings();
                
                      

            }




}
?>