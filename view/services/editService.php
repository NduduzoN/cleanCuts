<!DOCTYPE html>

<html>

<head>
  <title>Update Services</title>
</head>



<?php
echo "
<body>
<div class='container'>
<div class='row col-sm-6 col-sm-offset-3'>
  <div class='panel panel-primary'>
    <div class='panel-heading text-center'>
      <h2>  Update Services  </h2>
    </div>
    <div class='panel-body'>";

echo"<h3>Update Services</h3>";



    echo"<form method=get> <input type=hidden name=controller value='service'>
	     <input type=hidden name=action value='editServices'>";

    foreach($serviceDetails as $serviceDetail){
        echo"Enter hairstyle ID<br><input type=number name='hairstyle_ID' value='$serviceDetail->hairstyle_ID' placeholder='Enter hairstyle ID' Required><br><br>

        Enter hairstyle name<br><input type=text name='hairstyle_description' value='$serviceDetail->hairstyle_description' placeholder='Enter hairstyle name' Required><br><br>
        Enter Price<br><input type=text name='hairstyle_price' value='$serviceDetail->hairstyle_price' placeholder='Enter Price' Required><br>";

    }
        echo"<input type=submit name='update' value='Update'>";
?>
   </form>


</body>
</div>
    
    </div>
  </div>
  </div>
</html>