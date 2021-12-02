<?php

    class ReportController{

        public function bookings()
        {
            require_once ("view/adminHeader.php");
            $startDate = new DateTime('first day of previous month');
            $endDate = new DateTime('last day of previous month');

            $sDate = (FILTER_INPUT (INPUT_GET, 'fstartdate')?FILTER_INPUT (INPUT_GET, 'fstartdate'): date_format($startDate,"Y-m-d"));

            $eDate = (FILTER_INPUT (INPUT_GET, 'fenddate')?FILTER_INPUT (INPUT_GET, 'fenddate'): date_format($endDate,"Y-m-d"));
            require_once('View/reports/selectDate.php');

            if(isset($_GET['mon']) == 'View')
            {

            
                $repo = Report::allReport($sDate, $eDate);

                require_once('View/reports/viewReport.php');


            }



        }




    }




?>
