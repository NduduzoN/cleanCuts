<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>



<?php
echo "

<body>
<div class='container'>
<div class='row col-sm-6 col-sm-offset-4'>
  <div class='panel panel-primary'>
    <div class='panel-heading text-center'>
      <h2>  Report  </h2>
    </div>
    <div class='panel-body'>";

echo"<form method=get > ";

echo"<table border='2'>
    <tr>

        <th>Stylist ID</th>
        <th>Stylist Names</th>
        <th>Total Bookings</th>
    </tr>";
    foreach($repo as $results)
    {
        echo "<tr>
            <td>$results->stylist_ID</td>
            <td>$results->stylist_fullName</td>
            <td>$results->totBookings</td>
            </tr>";

    }

?>
</table>
</form>
</body>
</div>
    
    </div>
  </div>
  </div>
</html>