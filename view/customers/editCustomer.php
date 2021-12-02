<!DOCTYPE html>

<html>

<head>
  <title>Edit Customer</title>
</head>

<body>

<?php
echo "
<div class='container'>
<div class='row col-sm-6 col-sm-offset-4'>
  <div class='panel panel-primary'>
    <div class='panel-heading text-center'>
      <h2>  Update Data  </h2>
    </div>
    <div class='panel-body'>";

    echo "<form method=get > <input type=hidden name=controller value='customer'>
	     <input type=hidden name=action value='editDetails'>";
          foreach($customerDetails as $customerDetail){
        echo "Enter ID<br><input type=number name='user_ID' value='$customerDetail->user_ID' placeholder='Enter User ID' Required><br><br>
        Enter First names<br><input type=text name='user_firstName'  value='$customerDetail->user_firstName' placeholder='Enter user first name' Required><br><br>
        Enter Surname<br><input type=text name='user_lastName'  value='$customerDetail->user_lastName' placeholder='Enter user last name' Required><br><br>
        Gender:<br>

        <input type=radio id='male1' name='gender' value='m'";if($customerDetail->user_gender =='m'){echo "checked";}echo" Required><label for='male1'>Male</label>
        <input type=radio id='female1' name='gender' value='f'";if($customerDetail->user_gender =='f'){echo "checked";}echo" Required><label for='female1'>Female</label>
        <input type=radio id='other1' name='gender' value='o'";if($customerDetail->user_gender =='o'){echo "checked";}echo" Required><label for='other1'>Other</label><br><br>
        Enter e-mail<br><input type=text name='user_email'  value='$customerDetail->user_email' placeholder='Enter User email' Required><br><br>
        Enter mobile number<br><input type=text name='user_number'  value='$customerDetail->user_number' placeholder='Enter User number' Required><br><br>
        Enter User type ID<br><input type=number name='userType_ID'  value='$customerDetail->userType_ID' placeholder='Enter User type ID' Required><br>";

         }
        echo"<input type=submit name='update'  value='Update'>";




?>

      </form>
      </div>
    
    </div>
  </div>
  </div>
</body>
</html>