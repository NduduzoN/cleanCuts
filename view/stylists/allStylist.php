
<?php


echo "
<div class='container'>
<div class='row col-sm-6 col-sm-offset-4'>
  <div class='panel panel-primary'>
    <div class='panel-heading text-center'>
      <h2>  All Employees  </h2>
    </div>
    <div class='panel-body'>";


echo "<form method=get>

    Search Employee: <input type=text name='search_value' id='search_value' placeholder='Search value' /><br><br>
    <input type=submit name='search' value='Filter' /><br><br>
    <input type=hidden name=controller value='stylist'>
         <input type=hidden name=action value='filterTable'>
    </form>";
    echo"    <table class='table table-dark'>
    <thead>
      <tr>
                <th>Stylist ID</th>
                <th>Names</th>
                <th>Speciality</th>
                <th>E-mail</th>
                <th>Password</th>
                <td>Edit</td>
                <td>Delete</td>
            </tr>";

        foreach($stylists as $employees){
           echo "<tr>
                <td>$employees->stylist_ID</td>
                <td>$employees->stylist_fullName</td>
                <td>$employees->stylist_specialty</td>
                <td>$employees->stylist_email</td>
                <td>$employees->stylist_password</td>
                <td><a href='?controller=stylist&action=editDetails&stylist_ID=$employees->stylist_ID'>Edit</a></td>
                <td><a href='?controller=stylist&action=deleteDetails&stylist_ID=$employees->stylist_ID'>Delete</a></td>
                </tr>";
        }



?>


</table>
<?php
echo "<a href='?controller=stylist&action=addNewUser' name='newClient'>Add Customer</a>";
echo "<a href='?controller=home&action=home' name='home'>Admin Home</a> ";
?>
        </form>
        </div>
    
    </div>
  </div>
  </div>