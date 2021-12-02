
<?php

    Class Service{
        public $hairstyle_ID;
        public $hairstyle_description;
        public $hairstyle_price;

        public function __construct($hairstyle_ID, $hairstyle_description, $hairstyle_price){

            $this->hairstyle_ID = $hairstyle_ID;
            $this->hairstyle_description = $hairstyle_description;
            $this->hairstyle_price = $hairstyle_price;
        }

        public static function all()
            {
                $list = array();
                $db = Db::getInstance();
                $sql = "SELECT * FROM hairstyle ORDER BY hairstyle_ID";
                $req = $db->query($sql);

                foreach($req->fetchAll() as $hairstyles)
                {
                    $list[] = new Service($hairstyles['hairstyle_ID'], $hairstyles['hairstyle_description'], $hairstyles['hairstyle_price']);

                }

                return $list;
            }


        public static function addNew($hairstyle_ID, $hairstyle_description, $hairstyle_price)
        {
            $db = Db::getInstance();
            $_SESSION['valid'] = " ";
            $sql = "INSERT INTO hairstyle(hairstyle_ID, hairstyle_description, hairstyle_price) VALUES('$hairstyle_ID', '$hairstyle_description', '$hairstyle_price')";
             try{
                  if($db->query($sql)){

                        $_SESSION['valid'] = "true";

                    }


             }
             catch (PDOException $e)
             {
                $_SESSION['valid'] = "false";
                header("Refresh:0;url=?controller=service&action=newDetails");

             }
        }


        public static function details($userID)
        {
             $list = array();
            $db = Db::getInstance();
            $sql = "SELECT DISTINCT * FROM hairstyle WHERE hairstyle_ID ='$userID'";

            try{
            $req = $db->query($sql);
            foreach($req->fetchAll() as $hairstyles)
                {
                    $list[] = new Service($hairstyles['hairstyle_ID'], $hairstyles['hairstyle_description'], $hairstyles['hairstyle_price']);

                }

                return $list;
                }
            catch (PDOException $e)
             {
                  header("Refresh:0;");
             }


        }

        public static function editService($hair_ID,$hairstyle_ID, $hairstyle_description, $hairstyle_price)
        {
            $db = Db::getInstance();
            $_SESSION['valid'] = " ";
            $edit = "UPDATE hairstyle SET hairstyle_ID='$hairstyle_ID', hairstyle_description='$hairstyle_description', hairstyle_price = '$hairstyle_price' WHERE hairstyle_ID='$hair_ID'";
            try {
               // $db->prepare($edit);
                if($db->query($edit)){
            	$_SESSION['valid'] = "true";
                }
               }
            catch (PDOException $e)
            {
                $_SESSION['valid'] = "false";
            }

        }

        public static function deleteService($hair_ID)
        {
            $db = Db::getInstance();

               $sql = "DELETE FROM hairstyle WHERE hairstyle_ID ='$hair_ID'";


             try{
                  if($db->query($sql)){
                                 ?><script>
                            window.alert("1 service deleted");

                        </script><?php
                        //header("Refresh:0;");
                    }


             }
             catch (PDOException $e)
             {
                  ?><script>
                            window.alert("Service could not be deleted");

                        </script><?php
                        header("Refresh:0;");
             }


        }




        public static function filter($valueToSearch)
        {
            $db = Db::getInstance();

            $squery = "SELECT *";
            $squery .= " FROM hairstyle";
            $squery .= " HAVING CONCAT(hairstyle_ID, hairstyle_description, hairstyle_price) LIKE '%".$valueToSearch."%'";
            $squery .= " ORDER BY hairstyle_ID";

            try{
            $req = $db->query($squery);

            foreach($req->fetchAll() as $hairstyles)
            {
                $list[] = new Service($hairstyles['hairstyle_ID'], $hairstyles['hairstyle_description'], $hairstyles['hairstyle_price']);

            }

             return $list;
             }
            catch (PDOException $e)
             {
                 ?><script>
                            window.alert("No such value");

                        </script><?php
                  header("Refresh:0; url=?controller=service&action=allServices");
             }

        }






    }



?>
