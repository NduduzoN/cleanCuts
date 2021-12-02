<?php
     class ServiceController{
         

         public function allServices(){
            require_once ("view/adminHeader.php");

            $services = Service::all();

            require_once('View/services/allService.php');


            }

       public function test_input($data)
       {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);

           return $data;
       }

        public function newDetails(){
            require_once ("view/adminHeader.php");

           if(isset($_GET['upload']) == 'Upload')
           {
               $services = Service::all();
               foreach($services as $serv)
               {
                   if($serv->hairstyle_ID == $_GET['hairstyle_ID']){
                       ?>
                     <script>
                        window.alert("Service details could not be captured, ID already exist");

                    </script>

                     <?php
                     header("Refresh:0; url=?controller=service&action=newDetails");
                     exit;

                   }
                   else{
                       $styleID = $_GET['hairstyle_ID'];
                        $description = ServiceController::test_input($_GET['hairstyle_description']);


                    if(empty($_GET['hairstyle_description']))
                   {
                    ?><script>
                        window.alert("Description cannot be empty");

                    </script><?php
                        header("Refresh:0; url=?controller=service&action=newDetails"); // redirects to all records page
                        exit;


                    }

                    else

                        if(!preg_match("/^[a-zA-Z-' ]*$/",  $description)){
                            ?><script>
                                window.alert("Description must contain only alphabets");

                            </script><?php
                            header("Refresh:0; url=?controller=service&action=newDetails"); // redirects to all records page
                            exit;
                        }
                    $price = $_GET['hairstyle_price'];

                   }
               }

               Service::addNew($styleID, $description, $price);

               if($_SESSION['valid'] == "true")
               {
                ?><script>
                            window.alert("1 new Service Added");

                    </script><?php
                        header("Refresh:0; url=?controller=service&action=allServices"); // redirects to all records page
                        exit;
                    }
                    else
                    {
                        ?>
                         <script>
                            window.alert("Service details could not be added");
                        </script>

                         <?php
                         header("Refresh:0; url=?controller=service&action=newDetails"); // redirects to all records page
                         exit;
                    }


            }

           require_once('View/services/newService.php');

        }

        public function editServices(){
            require_once ("view/adminHeader.php");
            $serviceID = $_GET['hairstyle_ID'];

            $serviceDetails = Service::details($serviceID);

            if(isset($_GET['update']) == 'Update')
            {
                 $service_ID = intval($_GET['hairstyle_ID']);
                 $description = ServiceController::test_input($_GET['hairstyle_description']);


                    if(empty($_GET['hairstyle_description']))
                   {
                    ?><script>
                        window.alert("Description cannot be empty");

                    </script><?php
                        header("Refresh:0; url=?controller=service&action=editServices&hairstyle_ID=$service_ID"); // redirects to all records page
                        exit;


                    }

                    else

                        if(!preg_match("/^[a-zA-Z-' ]*$/",  $description)){
                            ?><script>
                                window.alert("Description must contain only alphabets");

                            </script><?php
                            header("Refresh:0; url=?controller=service&action=editServices&hairstyle_ID=$service_ID"); // redirects to all records page
                            exit;
                        }
                        else{

                    $price = $_GET['hairstyle_price'];
                    }


            $insert = Service::editService($serviceID, $service_ID, $description, $price);

           if($_SESSION['valid'] == "true" && $insert != " ")
            {
            ?><script>
                        window.alert("1 new Service Updated");

                </script><?php
                    header("Refresh:0; url=?controller=service&action=allServices"); // redirects to all records page
                    exit;
                }
                else
                {
                    ?>
                     <script>
                        window.alert("Service details could not be added");
                    </script>

                     <?php
                     header("Refresh:0; url=?controller=service&action=editServices&hairstyle_ID=$service_ID"); // redirects to all records page
                     exit;
                }
            }

               require_once('View/services/editService.php');


        }

        public function deleteDetails(){
                $hairID = $_GET['hairstyle_ID'];

             Service::deleteService($hairID);


                header("Refresh:0; url=?controller=service&action=allServices"); // redirects to all records page
                exit;


            }





        public function filterTable(){

         if(isset($_GET['search_value']))
        {
            $valueToSearch = $_GET['search_value'];

           $services = Service::filter($valueToSearch);


        }
        else{
            $services = Service::all();


        }
            require_once('View/services/allService.php');

        }



        }

?>
