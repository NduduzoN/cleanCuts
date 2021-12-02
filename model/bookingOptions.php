<?php
class BookingOptions {

    public $timeframeID;
    public $timeframedescription;
    public function __construct($timeframeID,$timeframedescription) {
		//constructing user
        $this->timeframeID = $timeframeID;
        $this->timeframedescription = $timeframedescription;
    }
    
    public static function getTime(){

            $list = array();
      		$db = Db::getInstance();
            $sql = "SELECT timeframe_ID,timeframe_description FROM timeframe";
			$req = $db->query($sql);
				// we create a list of booking objects from the database results
				foreach ($req->fetchAll() as $bookingOptions) {
					$list[] = new BookingOptions($bookingOptions['timeframe_ID'],$bookingOptions['timeframe_description']);
				}
				return $list;
    }

    public static function getHairstyle(){
            $hairstyle_list = array();
      		$db = Db::getInstance();
            $sql = "SELECT hairstyle_ID,hairstyle_description FROM hairstyle";
			$req = $db->query($sql);
				// we create a list of booking objects from the database results
				foreach ($req->fetchAll() as $bookingOptions) {
					$hairstyle_list[] = new BookingOptions($bookingOptions['hairstyle_ID'],$bookingOptions['hairstyle_description']);
				}
				return $hairstyle_list;
        }
    public static function getStylist(){
            $list = array();
      		$db = Db::getInstance();
            $sql = "SELECT stylist_ID,stylist_firstName FROM stylist";
			$req = $db->query($sql);
				// we create a list of booking objects from the database results
				foreach ($req->fetchAll() as $bookingOptions) {
					$list[] = new BookingOptions($bookingOptions['stylist_ID'],$bookingOptions['stylist_firstName']);
				}
				return $list;
        }
    }