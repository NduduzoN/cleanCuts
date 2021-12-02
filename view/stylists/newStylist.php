<!DOCTYPE html>

<html>

<head>
  <title>Add new employee</title>
  <style type="text/css">.error{
      color: #FF0000;
  }
</style>
</head>

<body>

<?php
echo "<h2>New Employee</h2>";
        echo"<form method='get'><input type=hidden name=controller value='stylist'>
	     <input type=hidden name=action value='addNewUser'>

        Enter stylist ID<br><input type=number name='stylist_ID' placeholder='e.g. 1/2' Required><br><br>
        Enter stylist Name(s) + surname<br><input type='text' name='stylist_fullName' placeholder='e.g. Andile Sabelo Mathebula' Required><br><br>
        Enter Specialty<br><input type='text' name='stylist_specialty' placeholder='e.g. Impandla' Required><br><br>
        Enter email<br><input type='text' name='email' placeholder='watloo@yahoo.com' Required><br><br>
        Enter password<br><input type='text' name='password' placeholder='password' Required><br>

        <input type=submit name='newStylist' value='Add New Employee'>";

        ?>
    </form>

</body>
</html>