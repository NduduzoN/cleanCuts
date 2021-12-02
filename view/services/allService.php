
<?php
echo "
<body>
<div class='container'>
<div class='row col-sm-6 col-sm-offset-3'>
  <div class='panel panel-primary'>
    <div class='panel-heading text-center'>
      <h2>  All Services  </h2>
    </div>
    <div class='panel-body'>";


echo "<form method=get>

    Search Service: <input type=text name='search_value' id='search_value' placeholder='Search value' /><br><br>
    <input type=submit name='search' value='Filter' /><br><br>
    <input type=hidden name=controller value='service'>
         <input type=hidden name=action value='filterTable'>
    </form>";

    echo"<table class='table table-dark'>
    <thead>
      <tr>


    
        <th>Hairstle ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>";
     foreach($services as $service){
           echo "<tr>
                <td>$service->hairstyle_ID</td>
                <td>$service->hairstyle_description</td>
                <td>$service->hairstyle_price</td>
                <td><a href='?controller=service&action=editServices&hairstyle_ID=$service->hairstyle_ID'>Edit</a></td>
                <td><a href='?controller=service&action=deleteDetails&hairstyle_ID=$service->hairstyle_ID'>Delete</a></td>
                </tr>";


     }


?>

</table>

<?php
echo "<a href='?controller=service&action=newDetails' name='newClient'>Add new Service</a>";
echo "<a href='?controller=home&action=home' name='home'>Admin Home</a> ";
?>
</div>
    
    </div>
  </div>
  </div>
  </body>
        </form>
