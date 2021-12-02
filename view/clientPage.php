<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <link rel="stylesheet" href="css/main.css" />

    

    
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="clientPage.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Manage Account
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Manage</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?controller=login&action=changePassword">Change Password</a>
                        <div class="dropdown-divider"></div>
                      </div>
                    </li>
                    
                </ul>
                
            </div>
        </nav>
    </div>
    
  </head>
    
            
  <body>
 
  <div class="container">
    <div class="row col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h2>  Make Booking  </h2>
        </div>
        <div class="panel-body">
        
          <form method="post">
          
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date"  id = "bdate" name = "bdate" value=""/>
            </div>
            <div class="form-group">
            <!--------- adding timeslote from the booking table onto the select option-------->
            
              <label for="time">Time     :</label>
              <select id="time" name="time" class="form-select form-select-sm" aria-label=".form-select-sm example">
              
               
              </select>


            </div>
            <!------inserting select values from database    --->
            <div class="form-group">
            <!--------- adding hairstylist description from the hairstyle table onto the select option-------->
            
            
              <label for="hairstyle">hairstyle</label>
              
              <select id="hairstyle" name="hairstyle" class="form-select form-select-sm" aria-label=".form-select-sm example">
              
               
              </select>
            </div>

            <div class="form-group">
            <!--------- adding stylist description from the globalhs db onto the select option-------->
            
            
              <label for="stylist">Stylist</label>
              
              <select id="stylist" name="stylist" class="form-select form-select-sm" aria-label=".form-select-sm example">
              
               
              </select>
            </div>

            
                
              
            <div>
            <button type="submit" name="book" class="btn btn-info">Book</button>

            </div>
            
          </form>
          <!------Make booking    --->
          
        </div>
        
      </div>
    </div>
  </div>
  
        
      
<div class="container">
    
      <form  method = "POST">
          
          <input type ="date"   name = "txtStartDate">
          <input type ="date" name = "txtEndDate">
          <input type ="submit" name = "search" value="view bookings">
      </form> 
       
<!----loading dB stylist bookings onto a table--->

             
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
              
              
                <button type="submit" name="cancel" value="" class="btn btn-danger">Cancel</button>

                
            </td>
            </tr>
             <!----showing stylist as--->
           
        <table class="table table-dark">
            <thead>
              <tr>
                
                <th scope="col">Booking Number</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Stylist</th>
                <th scope="col">Hairstyle</th>
                <th scope="col">Status</th>
          
                <th scope="col">Action</th>
              </tr>
            </thead>
<!----showing stylist bookings table--->

  
     
            <tbody>
            <Form action = "cancelBooking.php" method = "post">
  
             
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
              
              
                <button type="submit" name="cancel" value="" class="btn btn-danger">Cancel</button>

                
                
            </td>
            </tr>
             
           
          </form>

        
              </tbody>
            </table>

            
  </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


  
</html>