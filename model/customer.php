
<?php

    class Customer {
         public $user_ID;
         public $user_firstName;
         public $user_lastName;
         public $user_gender;
         public $user_email;
         public $user_number;
         public $userType_ID;

          public function __construct($user_ID, $user_firstName, $user_lastName, $user_gender,$user_email, $user_number, $userType_ID){
                $this->user_ID = $user_ID;
                $this->user_firstName = $user_firstName;
                $this->user_lastName = $user_lastName;
                $this->user_gender = $user_gender;
                $this->user_email = $user_email;
                $this->user_number = $user_number;
                $this->userType_ID = $userType_ID;


            }


            public static function all()
            {
                $list = array();
                $db = Db::getInstance();
                $sql = "SELECT * FROM user ORDER BY user_ID";
                $req = $db->query($sql);
                foreach($req->fetchAll() as $customer)
                {
                    $list[] = new Customer($customer['user_ID'],$customer['user_firstName'],$customer['user_lastName'],$customer['user_gender'],$customer['user_email'],$customer['user_number'],$customer['userType_ID']);

                }

                 return $list;

        }

        public static function details($userID)
        {
             $list = array();
            $db = Db::getInstance();
            $sql = "SELECT DISTINCT * FROM user WHERE user_ID ='$userID'";
            try{
            $req = $db->query($sql);
            foreach($req->fetchAll() as $customer)
            {
                $list[] = new Customer($customer['user_ID'],$customer['user_firstName'],$customer['user_lastName'],$customer['user_gender'],$customer['user_email'],$customer['user_number'],$customer['userType_ID']);

            }

             return $list;
             }
             catch (PDOException $e)
             {
                  header("Refresh:0;");
             }

        }

   public static function addNew($user_firstName, $user_lastName, $user_gender,$user_email, $user_password, $user_number, $userType_ID)
        {      
            $db = Db::getInstance();
            $_SESSION['valid'] = " ";
            $sql = "INSERT INTO user(user_firstName, user_lastName, user_gender, user_email, user_password,user_number, userType_ID) VALUES('$user_firstName', '$user_lastName', '$user_gender','$user_email' ,'$user_password' ,'$user_number', '$userType_ID')";
             try{
                  if($db->query($sql)){
                                 ?><script>
                           // window.alert("1 user Added");


                        </script><?php
                        $_SESSION['valid'] = "true";
                        //header("Refresh:0;");
                    }


             }
             catch (PDOException $e)
             {
                  ?><script>
                            //window.alert("User could not be added");


                        </script><?php
                        $_SESSION['MESSAGE'] = "Profile could not be updated";
                        header("Refresh:0;");

             }
        }


        public static function edit($user_ID, $user_firstName, $user_lastName, $user_gender,$user_email, $user_number, $userType_ID)
        {
            $db = Db::getInstance();

            $edit = "UPDATE user SET user_ID='$user_ID',user_firstName='$user_firstName',user_lastName = '$user_lastName', user_gender = '$user_gender',user_email = '$user_email',user_number = '$user_number',userType_ID = '$userType_ID' WHERE user_ID = '$user_ID'";

            

            try {
               // $db->prepare($edit);
                if($db->query($edit)){
            	$_SESSION['MESSAGE'] = "Profile updated";
                }
               }
            catch (PDOException $e)
            {
                $_SESSION['MESSAGE'] = "Profile could not be updated";
            }
            }

        public static function deleteUser($userID)
        {
            $db = Db::getInstance();

               $sql = "DELETE FROM user WHERE user_ID ='$userID'";


             try{
                  if($db->query($sql)){
                                 ?><script>
                            window.alert("1 user deleted");

                        </script><?php
                        //header("Refresh:0;");
                    }


             }
             catch (PDOException $e)
             {
                  ?><script>
                            window.alert("User could not be deleted");

                        </script><?php
                        header("Refresh:0;");
             }


        }



        public static function filter($valueToSearch)
        {
            $db = Db::getInstance();

            $squery = "SELECT *";
            $squery .= " FROM user";
            $squery .= " HAVING CONCAT(user_ID, user_firstName, user_lastName, user_email, user_number,userType_ID) LIKE '%".$valueToSearch."%'";
            $squery .= " ORDER BY user_ID";

            try{
                 $req = $db->query($squery);
                foreach($req->fetchAll() as $customer)
                {
                    $list[] = new Customer($customer['user_ID'],$customer['user_firstName'],$customer['user_lastName'],$customer['user_gender'],$customer['user_email'],$customer['user_password'],$customer['user_number'],$customer['userType_ID']);

                }

                return $list;
            }
            catch (PDOException $e)
             {
                 ?><script>
                            window.alert("No such value");

                        </script><?php
                  header("Refresh:0; url=?controller=customer&action=allCustomers");
             }


        }



    }




?>

