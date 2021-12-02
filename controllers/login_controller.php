<?php
 class LoginController{
		public function viewhome(){
		require_once ("view/homePage.php");
		}

		public function viewgallery(){
		require_once ("view/gallery.php");
		}
		public function viewteam(){
		require_once ("view/team.php");
		}
	   	public function login() {
      	// check if valid login, otherwise display login again
            $usertype = filter_input (INPUT_POST,"userType")?filter_input (INPUT_POST,"userType"): '';
	        $username = filter_input (INPUT_POST,"userEmail")?filter_input (INPUT_POST,"userEmail"): '';
			$password = filter_input (INPUT_POST,"userPassword")?filter_input (INPUT_POST,"userPassword"): '';
			$user = User::find($usertype,$username,$password);
		if (!$user) {
		
			
			require_once ("view/loginHeader.php");
			include ('view/login.php'); 
            require_once ("footer.php"); 
		} 
        else if($usertype == 3)
		{	
			
            
			$_SESSION['user'] = $user->userID;
            header("Refresh:0; url=?controller=booking&action=showBookings");
			
				
			
		}
        else if($usertype == 2)
		{	
			
          
			$_SESSION['userStylist'] = $user->userID;
			
			header("Refresh:0; url=?controller=booking&action=showStylistBookings");
        

				
			
		}
        else if($usertype == 1)
		{	
			
           

			$_SESSION['userAdmin'] = $user->userID;
			header("Refresh:0; url=?controller=customer&action=allCustomers");
            

				
			
		}

    }
	public function signup() {

		if(isset($_GET['signup'])){
			require_once ('view/registrationPage.php');

		}
		else{
			require_once ('view/registrationPage.php'); 
            require_once ("footer.php"); 

		}
	}
	public function changePassword() {

		if(isset($_POST['change'])){
			
			$userid = $_SESSION['user'];
			$oldPassword = filter_input (INPUT_POST,"oldPassword")?filter_input (INPUT_POST,"oldPassword"): '';
			$newPassword = filter_input (INPUT_POST,"newPassword")?filter_input (INPUT_POST,"newPassword"): '';
			$confirmPassword = filter_input (INPUT_POST,"confirmPassword")?filter_input (INPUT_POST,"confirmPassword"): '';
			if($oldPassword && $newPassword && $confirmPassword){

				
			$checkpassword = User::checkPassword($userid, $oldPassword);
				
					if($checkpassword && $newPassword === $confirmPassword && $newPassword && $confirmPassword){
        
						$number = preg_match('@[0-9]@', $newPassword);
						$uppercase = preg_match('@[A-Z]@', $newPassword);
						$lowercase = preg_match('@[a-z]@', $newPassword);
						$specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $newPassword);
						
						  
						if( strlen($newPassword) >= 8 && $number && $uppercase && $lowercase && $specialChars){
			
						$hash = password_hash($newPassword, algo:PASSWORD_BCRYPT);
						User::changePassword($hash,$userid);
						
						?>
                    <script>
                        window.alert("Password Changed Successfull");

                    </script>
                    <?php
					
					header("Refresh:0; url=?controller=booking&action=showBookings");
				}

			}
		}
	}
		else{
			require_once ("view/clientHeader.php");
			include ('view/changePassword.php'); 
            require_once ("footer.php"); 

		}
	}

	public function changeStylistPassword(){
		if(isset($_POST['change'])){
			
			$userid = $_SESSION['userStylist'];
			$oldPassword = filter_input (INPUT_POST,"oldPassword")?filter_input (INPUT_POST,"oldPassword"): '';
			$newPassword = filter_input (INPUT_POST,"newPassword")?filter_input (INPUT_POST,"newPassword"): '';
			$confirmPassword = filter_input (INPUT_POST,"confirmPassword")?filter_input (INPUT_POST,"confirmPassword"): '';
			if($oldPassword && $newPassword && $confirmPassword){

				
			$checkpassword = User::checkStylistPassword($userid, $oldPassword);
				
					if($checkpassword && $newPassword === $confirmPassword && $newPassword && $confirmPassword){
        
						$number = preg_match('@[0-9]@', $newPassword);
						$uppercase = preg_match('@[A-Z]@', $newPassword);
						$lowercase = preg_match('@[a-z]@', $newPassword);
						$specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $newPassword);
						
						  
						if( strlen($newPassword) >= 8 && $number && $uppercase && $lowercase && $specialChars){
			
						$hash = password_hash($newPassword, algo:PASSWORD_BCRYPT);
						User::changeStylistPassword($hash,$userid);
						
						?>
                    <script>
                        window.alert("Password Changed Successfull");

                    </script>
                    <?php
					
					header("Refresh:0; url=?controller=booking&action=showStylistBookings");
				}

			}
		}
	}
		else{
			require_once ('view/stylistHeader.php');
			include ('view/changePassword.php'); 
            require_once ("footer.php"); 

		}


	}
	public function logout() 
	{
		

		
			session_destroy();
			header("location:index.php");
		
			
	}
	public function changeAdminPassword() {

		if(isset($_POST['change'])){
			
			$userid = $_SESSION['userAdmin'];
			$oldPassword = filter_input (INPUT_POST,"oldPassword")?filter_input (INPUT_POST,"oldPassword"): '';
			$newPassword = filter_input (INPUT_POST,"newPassword")?filter_input (INPUT_POST,"newPassword"): '';
			$confirmPassword = filter_input (INPUT_POST,"confirmPassword")?filter_input (INPUT_POST,"confirmPassword"): '';
			if($oldPassword && $newPassword && $confirmPassword){

				
			$checkpassword = User::checkAdminPassword($userid, $oldPassword);
				
					if($checkpassword && $newPassword === $confirmPassword && $newPassword && $confirmPassword){
        
						$number = preg_match('@[0-9]@', $newPassword);
						$uppercase = preg_match('@[A-Z]@', $newPassword);
						$lowercase = preg_match('@[a-z]@', $newPassword);
						$specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $newPassword);
						
						  
						if( strlen($newPassword) >= 8 && $number && $uppercase && $lowercase && $specialChars){
			
						$hash = password_hash($newPassword, algo:PASSWORD_BCRYPT);
						User::changeAdminsPassword($hash,$userid);
						
						?>
                    <script>
                        window.alert("Password Changed Successfull");

                    </script>
                    <?php
					header("Refresh:0; url=?controller=customer&action=allCustomers");
					
					
				}

			}
		}
	}
		else{
			require_once ("view/adminHeader.php");
			include ('view/changePassword.php'); 
            require_once ("footer.php"); 

		}
	}

}
?>
