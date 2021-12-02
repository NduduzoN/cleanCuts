<!DOCTYPE html>

<html>

<head>
  <title>Add new Details</title>
</head>

<body>

<?php

echo "
<div class='container'>
<div class='row col-sm-6 col-sm-offset-4'>
  <div class='panel panel-primary'>
    <div class='panel-heading text-center'>
      <h2>  Add new Data  </h2>
    </div>
    <div class='panel-body'>";
    
    echo "<form method=get > <input type=hidden name=controller value='customer'>
	     <input type=hidden name=action value='newDetails'>";
        echo "Enter ID<br><input type=number name='user_ID' placeholder='Enter User ID' Required><br><br>
        Enter First names<br><input type=text name='user_firstName' placeholder='Enter user first name' Required><br><br>
        Enter Surname<br><input type=text name='user_lastName' placeholder='Enter user last name' Required><br><br>
        Gender:<br>
        <input type=radio name='gender' value='m' Required>Male
        <input type=radio name='gender' value='f' Required>Female
        <input type=radio name='gender' value='o' Required>Other<br><br>
        Enter e-mail<br><input type=text name='user_email' placeholder='Enter User email' Required><br><br>
        Enter Password<br><input type=text name='user_password' placeholder='Enter User password' Required><br><br>
        Enter mobile number<br><input type=text name='user_number' placeholder='Enter User number' Required><br><br>
        Enter User type ID<br><input type=number name='userType_ID' placeholder='Enter User type ID' Required><br>";

        echo"<input type=submit name='upload' value='Upload'>";




?>
      </form>
      </div>
    
    </div>
  </div>
  </div>

</body>
</html>