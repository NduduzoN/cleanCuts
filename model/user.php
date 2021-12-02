<?php

  class User {
	  
    // we define 2 attributes
    // they are public so that we can access them using $student->surname (e.g.) directly
    public $username;
	public $userID;
	public $userType;
	public $user_Password;
   
    	public function __construct($username,$userType,$userID,$user_Password) {
		//constructing user
			
			$this->userType  =  $userType;
      		$this->username  = $username;
			$this->userID  = $userID;
			$this->user_Password = $user_Password;
      		
    	}

    	public static function find($usertype ,$username,$password) {
//note that this method can be used to validate a user: if a user cannot be found (find return false, the combination is not valid
	      	$list = array();
      		$db = Db::getInstance();

		if($usertype == 1 ){
			$sql = "SELECT admin_firstName,userType_ID,admin_ID,admin_password FROM admin WHERE admin_email = 
			'$username'";
			//echo $sql;
			$req = $db->query($sql);
			$i=0;
				// we create a list of Student objects from the database results
				foreach ($req->fetchAll() as $user) {
					$list[] = new User($user['admin_firstName'],$user['userType_ID'],$user['admin_ID'],$user['admin_password']);
				$i++;
				}
				if ($i>0 && password_verify ($password, strval($user['admin_password'])) == true)
				return $list[0];  //this contains the username and role in an object
			else
				return false;
			}

		else if ($usertype == 2 ){
			$sql = "SELECT stylist_firstName,userType_ID,stylist_ID,stylist_password FROM stylist WHERE stylist_email = 
			'$username'";
			//echo $sql;
			$req = $db->query($sql);
			$i=0;
				// we create a list of Student objects from the database results
				foreach ($req->fetchAll() as $user) {
					$list[] = new User($user['stylist_firstName'],$user['userType_ID'],$user['stylist_ID'],$user['stylist_password']);
				$i++;
				}
				if ($i>0 && password_verify ($password, strval($user['stylist_password'])) == true)
				return $list[0];  //this contains the username and role in an object
			else
				return false;
			}

		else if ($usertype == 3 ){
			$sql = "SELECT user_firstName,userType_ID,user_ID,user_password FROM user WHERE user_email = 
			'$username'";
			//echo $sql;
			$req = $db->query($sql);
			$i=0;
				// we create a list of Student objects from the database results
				foreach ($req->fetchAll() as $user) {
					$list[] = new User($user['user_firstName'],$user['userType_ID'],$user['user_ID'],$user['user_password']);
				$i++;
				}
				if ($i>0 && password_verify ($password, strval($user['user_password'])) == true){
				return $list[0];}  
			else{
				$_SESSION['denied'] = "Wrong Password/username";
				return false;}
			}	



		
	} 
	public static function changePassword($passwordHash,$userID) {
		//note that this method can be used to validate a user: if a user cannot be found (find return false, the combination is not valid
					  $db = Db::getInstance();
					$sql = "UPDATE  user SET user_password = '$passwordHash' WHERE user_ID = $userID";
					//echo $sql;
					
					try {
						// $db->prepare($edit);
						 if($db->query($sql)){
						 $_SESSION['MESSAGE'] = "Profile updated";
						 }
						}
					 catch (PDOException $e)
					 {
						 $_SESSION['MESSAGE'] = "Password could did not meet requrments";
					 }
					
					
	}
	public static function changeStylistPassword($passwordHash,$userID) {
		//note that this method can be used to validate a user: if a user cannot be found (find return false, the combination is not valid
					  $db = Db::getInstance();
					$sql = "UPDATE  stylist SET stylist_password = '$passwordHash' WHERE stylist_ID = $userID";
					//echo $sql;
					
					try {
						// $db->prepare($edit);
						 if($db->query($sql)){
						 $_SESSION['MESSAGE'] = "Profile updated";
						 }
						}
					 catch (PDOException $e)
					 {
						 $_SESSION['MESSAGE'] = "Password could did not meet requrments";
					 }
					
					
	}
	public static function changeAdminsPassword($passwordHash,$userID) {
		//note that this method can be used to validate a user: if a user cannot be found (find return false, the combination is not valid
					  $db = Db::getInstance();
					$sql = "UPDATE  admin SET admin_password = '$passwordHash' WHERE admin_ID = $userID";
					//echo $sql;
					
					try {
						// $db->prepare($edit);
						 if($db->query($sql)){
						 $_SESSION['MESSAGE'] = "Profile updated";
						 }
						}
					 catch (PDOException $e)
					 {
						 $_SESSION['MESSAGE'] = "Password could did not meet requrments";
					 }
					
					
	}
	public static function checkPassword($userid, $oldPassword){
		$db = Db::getInstance();
		$sql = "SELECT user_firstName, userType_ID,user_ID,user_password FROM user WHERE user_ID  = 
			'$userid'";
			//echo $sql;
			$req = $db->query($sql);
			$i=0;
				// we create a list of Student objects from the database results
				foreach ($req->fetchAll() as $user) {
					$list[] = new User($user['user_firstName'],$user['userType_ID'],$user['user_ID'],$user['user_password']);
				$i++;
				}
				if ($i>0 && password_verify( $oldPassword, strval($user['user_password'])))
				return $list[0];  //this contains the username and role in an object
			else
				return false;
	}
	public static function checkStylistPassword($userid, $oldPassword){
		$db = Db::getInstance();
		$sql = "SELECT stylist_firstName, userType_ID,stylist_ID,stylist_password FROM stylist WHERE stylist_ID  = 
			'$userid'";
			//echo $sql;
			$req = $db->query($sql);
			$i=0;
				// we create a list of Student objects from the database results
				foreach ($req->fetchAll() as $user) {
					$list[] = new User($user['stylist_firstName'],$user['userType_ID'],$user['stylist_ID'],$user['stylist_password']);
				$i++;
				}
				if ($i>0 && password_verify( $oldPassword, strval($user['stylist_password'])))
				return $list[0];  //this contains the username and role in an object
			else
				return false;
	}
	public static function checkAdminPassword($userid, $oldPassword){
		$db = Db::getInstance();
		$sql = "SELECT admin_firstName, userType_ID,admin_ID,admin_password FROM admin WHERE admin_ID  = 
			'$userid'";
			//echo $sql;
			$req = $db->query($sql);
			$i=0;
				// we create a list of Student objects from the database results
				foreach ($req->fetchAll() as $user) {
					$list[] = new User($user['admin_firstName'],$user['userType_ID'],$user['admin_ID'],$user['admin_password']);
				$i++;
				}
				if ($i>0 && password_verify( $oldPassword, strval($user['admin_password'])))
				return $list[0];  //this contains the username and role in an object
			else
				return false;
	}
			

	
} 
// end of class definition
?>