<!DOCTYPE html>

<html>

<?php
echo "
<body>
<div class='container'>
<div class='row col-sm-6 col-sm-offset-2'>
  <div class='panel panel-primary'>
    <div class='panel-heading text-center'>
      <h2>  Update Data  </h2>
    </div>
    <div class='panel-body'>"; 

echo "<h3>Update Data</h3>";


    echo "<form method=get > <input type=hidden name=controller value='stylist'>
	     <input type=hidden name=action value='editDetails'>";
          foreach($stylistDetails as $stylistDetail){
        echo "<input type=number name='stylist_ID'  value='$stylistDetail->stylist_ID' placeholder='Enter Username' Required>
        <input type=text name='stylist_fullName' value='$stylistDetail->stylist_fullName'  placeholder='Enter Names' Required>
        <input type=text name='stylist_specialty' value='$stylistDetail->stylist_specialty' placeholder='Enter specialty' Required>
        <input type=text name='email' id='email' value='$stylistDetail->stylist_email' placeholder='Enter email' Required>";
         }
        echo"<input type=submit id='ids'  value='Update'>";
        ?>


    </form>
</body>
</div>
    
    </div>
  </div>
  </div>
</html>