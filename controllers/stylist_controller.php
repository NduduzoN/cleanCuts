<?php


    class StylistController{

        public function allStylist(){
            require_once ("view/adminHeader.php");

            $stylists = Stylist::all();

        require_once('View/stylists/allStylist.php');


        }
         public function test_input($data)
           {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);

               return $data;
           }



        public function addNewUser(){
            require_once ("view/adminHeader.php");



            if(isset($_GET['newStylist']) == 'Add New Employee')
            {
                  //echo intval($_GET['stylist_ID']) ;
                  //echo gettype( intval($_GET['stylist_ID'])) ;
               $stylists = Stylist::all();
               foreach($stylists as $employee)
               {
                   if($employee->stylist_ID == $_GET['stylist_ID']){
                       ?>
                     <script>
                        window.alert("Employee details could not be captured, ID already exist");

                    </script>

                     <?php
                     header("Refresh:0; url=?controller=stylist&action=addNewUser");
                     exit;

                   }
                   else
                   {
                        $stylist_ID = $_GET['stylist_ID'];
                        if(empty($_GET['stylist_fullName']))
                        {
                            ?><script>
                            window.alert("Employee name cannot be empty");

                        </script><?php
                            header("Refresh:0; url=?controller=stylist&action=addNewUser"); // redirects to all records page
                            exit;


                        }
                        else{
                        $stylist_fullName = StylistController::test_input($_GET['stylist_fullName']);
                        if(!preg_match("/^[a-zA-Z-' ]*$/", $stylist_fullName)){
                            ?><script>
                                window.alert("Employee name must contain only alphabets");

                        </script><?php
                            header("Refresh:0; url=?controller=stylist&action=addNewUser"); // redirects to all records page
                            exit;
                        }
                        $stylist_specialty = $_GET['stylist_specialty'];
                        $stylist_email = $_GET['email'];
                        $stylist_password = $_GET['password'];
                         }
                       }
                   }



                    $add = Stylist::addNew($stylist_ID, $stylist_fullName, $stylist_specialty, $stylist_email,$stylist_password);

                    if($_SESSION['MESSAGE'] != " ")
                    {

                        ?><script>
                            window.alert("Employee details captured");

                    </script><?php
                        header("Refresh:0; url=?controller=stylist&action=allStylist"); // redirects to all records page
                        exit;
                    }
                    else
                    {
                        ?>
                         <script>
                            window.alert("Employee details could not be captured");
                        </script>

                         <?php
                         header("Refresh:0; url=?controller=stylist&action=addNewUser"); // redirects to all records page
                            exit;
                    }


                }

                 require_once('View/stylists/newStylist.php');



            }


        public function editDetails(){
            require_once ("view/adminHeader.php");
            $userID = $_GET['stylist_ID'];

            $stylistDetails = Stylist::details($userID);
             require_once('View/stylists/editStylist.php');
            if(isset($_GET['stylist_specialty']))
            {
                if(intval($_GET['stylist_ID']))
                {
                    $stylist_ID = $_GET['stylist_ID'];
                    $stylist_fullName = $_GET['stylist_fullName'];
                    $stylist_specialty = $_GET['stylist_specialty'];
                    $stylist_email = $_GET['email'];

                    $insert = Stylist::edit($userID, $stylist_ID, $stylist_fullName, $stylist_specialty);



                    if($insert !=' ')
                    {

                        ?><script>
                            window.alert("Employee details updated");

                    </script><?php
                        header("Refresh:0; url=?controller=stylist&action=allStylist&stylist_ID=$stylist_ID"); // redirects to all records page
                        exit;
                    }
                }
                else
                {
                    ?>
                     <script>
                        window.alert("Employee details could not be updated");
                    </script>

                     <?php
                     header("Refresh:0; url=?controller=stylist&action=editDetails&stylist_ID=$stylist_ID"); // redirects to all records page
                        exit;
                }


                }
                else{
                     ?><script>
                            window.alert("User ID should be an int value");
                            document.getElementByName('stylist_ID').style.borderColor = "red";

                    </script><?php
                }
            }


            public function deleteDetails(){
                require_once ("view/adminHeader.php");
                $userID = $_GET['stylist_ID'];

             Stylist::deleteUser($userID);


                header("Refresh:0; url=?controller=stylist&action=allStylist"); // redirects to all records page
                exit;


            }

            public function filterTable(){

                 if(isset($_GET['search_value']))
                {
                    $valueToSearch = $_GET['search_value'];

                    $stylists = Stylist::filter($valueToSearch);


                }
                else{
                    $stylists = Stylist::all();


            }
                require_once('View/stylists/allStylist.php');

            }





            }





?>

