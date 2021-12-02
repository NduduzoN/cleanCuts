<?php
    class Report{

        public $stylist_ID;
        public $stylist_fullName;
        public $totBookings;
        public $user_ID;
        public $user_firstName;
        public $user_lastName;
        public $user_number;
        public $booking_date;
        public $booking_timeframe;

        public function __construct($stylist_ID, $stylist_fullName, $totBookings)
        {
           $this->stylist_ID = $stylist_ID;
           $this->stylist_fullName = $stylist_fullName;
           $this->totBookings = $totBookings;
           



        }

        public static function allReport($sDate, $eDate)
        {
            $list = array();
            $db = Db::getInstance();

            $sql = "SELECT DISTINCT S.stylist_ID, stylist_firstName, COUNT(B.stylist_ID) AS 'total'";
             $sql .= " FROM stylist S, booking B";
             $sql .= " WHERE S.stylist_ID = B.stylist_ID";
             $sql .= " AND B.booking_date <'$eDate'";
             $sql .= " AND B.booking_date >'$sDate'";
             $sql .= " GROUP BY S.stylist_ID, S.stylist_firstName";
             $sql .= " ORDER BY COUNT(B.stylist_ID) DESC";

             $req = $db->query($sql);

             foreach($req->fetchAll() as $detail)
                {
                    $list[] = new Report($detail['stylist_ID'], $detail['stylist_firstName'], $detail['total']);

                }


              return $list;
        }







    }



?>
