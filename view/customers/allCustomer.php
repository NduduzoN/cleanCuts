<?php

echo "
<div class='container'>
<div class='row col-sm-5 col-sm-offset-1'>
  <div class='panel panel-primary'>
    <div class='panel-heading text-center'>
      <h2>  All Customers  </h2>
    </div>
    <div class='panel-body'>";

echo "<form method=get>

    Search Customer: <input type=text name='search_value' id='search_value' placeholder='Search value' /><br><br>
    <input type=submit name='search' value='Filter' /><br><br>
    <input type=hidden name=controller value='customer'>
         <input type=hidden name=action value='filterTable'>
    </form>";
    echo"    <table class='table table-dark'>
          <thead>
            <tr>
                <th>Customer ID</th>
                <th>Names</th>
                <th>Surname</th>
                <th>Gender</th>
                <th>E-mail</th>
                <th>Mobile Number</th>
                <th>User-type-ID</th>
                <td>Update</td>
                <td>Delete</td>
            </tr>";
            foreach($customers as $clients){
           echo "<tr>
                <td>$clients->user_ID</td>
                <td>$clients->user_firstName</td>
                <td>$clients->user_lastName</td>
                <td>$clients->user_gender</td>
                <td>$clients->user_email</td>
                
                <td>0$clients->user_number</td>
                <td>$clients->userType_ID</td>
                <td><a href='?controller=customer&action=editDetails&user_ID=$clients->user_ID'>Edit</a></td>
                <td><a href='?controller=customer&action=deleteDetails&user_ID=$clients->user_ID'>Delete</a></td>

                
                </tr>";
        }



?>


</table>
<?php
echo "<a href='?controller=customer&action=newDetails' name='newClient'>Add Customer</a>";
echo "<a href='?controller=home&action=home' name='home'>Admin Home</a> ";
?>
        </form>

        </div>
    
    </div>
  </div>
  </div>



