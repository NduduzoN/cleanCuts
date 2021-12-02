
<?php
        class Stylist{
            public $stylist_ID;
            public $stylist_fullName;
            public $stylist_specialty;
            public $stylist_email;
            public $stylist_password;

            public function __construct($stylist_ID, $stylist_fullName, $stylist_specialty, $stylist_email,$stylist_password){
                $this->stylist_ID = $stylist_ID;
                $this->stylist_fullName = $stylist_fullName;
                $this->stylist_specialty = $stylist_specialty;
                $this->stylist_email = $stylist_email;
                $this->stylist_password = $stylist_password;
            }

        public static function all()
        {
            $list = array();
            $db = Db::getInstance();
            $sql = "SELECT * FROM stylist ORDER BY stylist_ID";
            $req = $db->query($sql);
            foreach($req->fetchAll() as $stylist)
            {
                $list[] = new Stylist($stylist['stylist_ID'],$stylist['stylist_firstName'],$stylist['stylist_specialty'],$stylist['stylist_email'],$stylist['stylist_password']);

            }

             return $list;

        }

        public static function addNew($stylist_ID, $stylist_fullName, $stylist_specialty, $stylist_email,$stylist_password)
        {
            $db = Db::getInstance();
            $_SESSION['MESSAGE'] = " ";
            $sql = "INSERT INTO stylist(stylist_ID, stylist_fullName, stylist_specialty, stylist_email, stylist_password) VALUES('$stylist_ID', '$stylist_fullName', '$stylist_specialty', '$stylist_email', '$stylist_password')";
             try{
                  if($db->query($sql)){
                                 ?><script>
                           // window.alert("1 user Added");


                        </script><?php
                        $_SESSION['MESSAGE'] = "Profile updated";
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

        public static function details($userID)
        {
            $list = array();
            $db = Db::getInstance();
            $sql = "SELECT DISTINCT * FROM stylist  WHERE stylist_ID ='$userID'";
            $req = $db->query($sql);
            foreach($req->fetchAll() as $stylist)
            {
                $list[] = new Stylist($stylist['stylist_ID'],$stylist['stylist_firstName'],$stylist['stylist_specialty']
                ,$stylist['stylist_email'],$stylist['stylist_password']);

            }

             return $list;

        }


        public static function edit($userID, $stylist_ID, $stylist_fullName, $stylist_specialty)
        {
            $db = Db::getInstance();

            $edit = "UPDATE stylist SET stylist_ID='$stylist_ID',stylist_fullName='$stylist_fullName',
            stylist_specialty = '$stylist_specialty' WHERE stylist_ID='$userID'";
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
            // $records = "SELECT * FROM '$tblName'"; // fetch data from database

               $sql = "DELETE FROM stylist WHERE stylist_ID ='$userID'";


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
            $squery .= " FROM stylist";
            $squery .= " HAVING CONCAT(stylist_ID, stylist_fullName, stylist_specialty) LIKE '%".$valueToSearch."%'";
            $squery .= " ORDER BY stylist_ID";
            $req = $db->query($squery);

            foreach($req->fetchAll() as $stylist)
            {
                $list[] = new Stylist($stylist['stylist_ID'],$stylist['stylist_fullName'],$stylist['stylist_specialty'],$stylist['stylist_email'],$stylist['stylist_password']);

            }

             return $list;

        }


        



        }







?>
