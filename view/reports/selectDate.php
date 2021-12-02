<!DOCTYPE html>

<html>

<head>
  <title>Reports</title>
</head>



<?php
echo "
<body>
<div class='container'>
<div class='row col-sm-6 col-sm-offset-4'>
  <div class='panel panel-primary'>
    <div class='panel-heading text-center'>
      <h2>  Select Report date  </h2>
    </div>
    <div class='panel-body'>";

echo"<form id='form' method=get> <input type=hidden name=controller value='report'>
<div class='form-group'>
	     <input type=hidden name=action value='bookings'>

        Start date <input type =date name = 'fstartdate' value=" .$sDate ."><br>
        </div>
<div class='form-group'>
        End date   <input type =date name = 'fenddate' value=" .$eDate ."><br><br>";
        
        echo"</div>
        <input type=submit name='mon' value='View'>

        <br><br>
    <a href='?controller=home&action=home' name='home'>Admin Home</a>";

    
?>
 </form>
</body>
</div>
    
    </div>
  </div>
  </div>
</html>