
<?php

    class CustomerController{

         public function allCustomers(){
            require_once ("view/adminHeader.php");

            $customers = Customer::all();
        require_once('View/customers/allCustomer.php');


        }

        public function addNew()
        {
            
            $user_firstName = $this->test_input(strtolower($_GET['firstName']));
            $user_lastName = $this->test_input(strtolower($_GET['lastName']));
            $user_gender = $this->test_input(strtolower($_GET['gender']));
            $user_email = $this->test_input($_GET['email']);
            $user_password = $this->test_input($_GET['password']);
            $user_confirmPassword = $this->test_input($_GET['confirmPassword']);
            $user_number = $this->test_input(strtolower($_GET['number']));
            $userType_ID = 3;

            if($user_firstName && $user_lastName && $user_email && $user_gender && $user_password && $user_confirmPassword && $user_number && $userType_ID){
        
            $number = preg_match('@[0-9]@', $user_password);
            $uppercase = preg_match('@[A-Z]@', $user_password);
            $lowercase = preg_match('@[a-z]@', $user_password);
            $specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $user_password);
            
              
            if($user_password === $user_confirmPassword && strlen($user_password) >= 8 && $number && $uppercase && $lowercase && $specialChars && preg_match("/^[a-zA-Z-' ]*$/", $user_firstName) 
            &&  preg_match("/^[a-zA-Z-' ]*$/", $user_lastName) && filter_var($user_email, FILTER_VALIDATE_EMAIL)){

            $hash = strval(password_hash($user_password, algo:PASSWORD_BCRYPT ));

                Customer::addNew($user_firstName, $user_lastName, $user_gender,$user_email, $hash, $user_number, $userType_ID);
                ?>
                    <script>
                        window.alert("Registration Successfull");

                    </script>
                    <?php
                header("Refresh:0,url=?controller=login&action=login");
            }
            else{
                ?>
                    <script>
                        window.alert("PASSWORD MUST HAVE ATLEAST 8 CHARACTORS ATLEAST ONE LOWERCASE AND ATLEAST ONE UPERCASE VALUE AND ALTEAST ON CHARACTOR AND ONE NUMBER");

                    </script>
                    <?php
                header("Refresh:0,url=?controller=login&action=signup");

            }
            
            }
            else{
                ?>
                    <script>
                        window.alert("fill in all fields");

                    </script>
                    <?php
                 header("Refresh:0,url=?controller=login&action=signup");

            }}

            



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
               $users = Customer::all();
               foreach($users as $cust)
               {
                   if($cust->user_ID == $_GET['user_ID']){
                       ?>
                     <script>
                        window.alert("User details could not be captured, ID already exist");

                    </script>

                     <?php
                     header("Refresh:0; url=?controller=customer&action=newDetails");
                     exit;

                   }
                   else{
                    $user_ID = $_GET['user_ID'];
                    $user_firstName =  $this->test_input($_GET['user_firstName']);
                    $user_lastName =  $this->test_input($_GET['user_lastName']);
                   if(empty($_GET['user_firstName']))
                   {
                    ?><script>
                        window.alert("User name cannot be empty");

                    </script><?php
                        header("Refresh:0; url=?controller=customer&action=newDetails"); // redirects to all records page
                        exit;


                    }

                    else

                            if(!preg_match("/^[a-zA-Z-' ]*$/", $user_firstName)){
                                ?><script>
                                    window.alert("User name must contain only alphabets");

                                </script><?php
                                header("Refresh:0; url=?controller=customer&action=newDetails"); // redirects to all records page
                                exit;
                            }

                         else if(!preg_match("/^[a-zA-Z-' ]*$/", $user_lastName)){
                                ?><script>
                                    window.alert("User surname must contain only alphabets");

                                </script><?php
                                header("Refresh:0; url=?controller=customer&action=newDetails"); // redirects to all records page
                                exit;
                    }else{
                        if(isset($_GET['gender'])){ $user_gender =  $this->test_input($_GET['gender']);}
                          echo $user_gender;
                         $user_email = $_GET['user_email'];
                         $user_password = $_GET['user_password'];
                            $user_number = $_GET['user_number'];
                            $userType_ID = intval($_GET['userType_ID']);

                     }
                    }
                    }

                    Customer::addNew($user_ID, $user_firstName, $user_lastName, $user_gender,$user_email, $user_password, $user_number, $userType_ID);

                   if($_SESSION['valid'] != " ")
                    {

                        ?><script>
                            window.alert("1 new Customer Added");

                    </script><?php
                        header("Refresh:0; url=?controller=customer&action=allCustomers"); // redirects to all records page
                        exit;
                    }
                    else
                    {
                        ?>
                         <script>
                            window.alert("Customer details could not be added");
                        </script>

                         <?php
                         //header("Refresh:0; url=?controller=customer&action=newDetails"); // redirects to all records page
                            exit;
                    }



           }
            require_once('View/customers/newCustomer.php');
           }

        public function editDetails(){
            require_once ("view/adminHeader.php");
            $userID = $_GET['user_ID'];

            $customerDetails = Customer::details($userID);
             require_once('View/customers/editCustomer.php');
            if(isset($_GET['update']) == 'Update')
            {
                    $user_ID = $_GET['user_ID'];
                    $user_firstName =  $this->test_input($_GET['user_firstName']);
                    $user_lastName =  $this->test_input($_GET['user_lastName']);
                   if(empty($_GET['user_firstName']))
                   {
                    ?><script>
                        window.alert("User name cannot be empty");

                    </script><?php
                        header("Refresh:0; url=?controller=customer&action=editDetails&user_ID=$user_ID"); // redirects to all records page
                        exit;


                    }

                    else

                            if(!preg_match("/^[a-zA-Z-' ]*$/", $user_firstName)){
                                ?><script>
                                    window.alert("User name must contain only alphabets");

                                </script><?php
                                header("Refresh:0; url=?controller=customer&action=editDetails&user_ID=$user_ID"); // redirects to all records page
                                exit;
                            }

                         else if(!preg_match("/^[a-zA-Z-' ]*$/", $user_lastName)){
                                ?><script>
                                    window.alert("User surname must contain only alphabets");

                                </script><?php
                                header("Refresh:0; url=?controller=customer&action=editDetails&user_ID=$user_ID"); // redirects to all records page
                                exit;
                    }else{
                            if(isset($_GET['gender'])){ $user_gender =  $this->test_input($_GET['gender']);}

                            $user_email = $_GET['user_email'];
                            $user_number = $_GET['user_number'];
                            $userType_ID = intval($_GET['userType_ID']);

                    }
                    $insert = Customer::edit($userID, $user_ID, $user_firstName, $user_lastName, $user_gender,$user_email, $user_number, $userType_ID);



                    if($insert !=' ')
                    {

                        ?><script>
                            window.alert("Customer details updated");

                    </script><?php
                        header("Refresh:0; url=?controller=customer&action=allCustomers"); // redirects to all records page
                        exit;
                    }
                    else
                    {
                        ?>
                         <script>
                            window.alert("Customer details could not be updated");
                        </script>

                         <?php
                         header("Refresh:0; url=?controller=customer&action=editDetails&user_ID=$user_ID"); // redirects to all records page
                            exit;
                    }


        }
    }

    public function deleteDetails(){
        require_once ("view/adminHeader.php");
                $userID = $_GET['user_ID'];

             Customer::deleteUser($userID);


                header("Refresh:0; url=?controller=customer&action=allCustomers"); // redirects to all records page
                exit;


            }


        public function filterTable(){
            require_once ("view/adminHeader.php");

                 if(isset($_GET['search_value']))
                {
                    $valueToSearch = $_GET['search_value'];

                   $customers = Customer::filter($valueToSearch);


                }
                else{
                    $customers = Customer::all();


            }
                require_once('View/customers/allCustomer.php');

            }


    }



?>
