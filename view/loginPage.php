<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login Page</title>

    <!--boostrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <link rel="stylesheet" href="css/style.css" />

     
      
      <div class="container">
        
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="#"></a>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homePage.html#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                      
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Members
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log in</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Become a Member</a>
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
          <h2>  Log in  </h2>
        </div>
        <div class="panel-body">
          <form  method="post">
          <?php if(isset($_SESSION['denied'])){
              echo $_SESSION['denied'];
          }
          ?>
                  <label for="client" class="radio-inline"
                    ><input type="radio" name="userType" value="3" id="client" />Client</label>
                  <label for="stylist" class="radio-inline"
                    ><input type="radio" name="userType" value="2" id="stylist" />Stylist</label>
                  <label for="admin" class="radio-inline">
                      <input type="radio" name="userType" value="1" id="admin"/>Admin</label>
          <div class="form-group">
          </div>
          <!-------velue entered verification--------->
            <p><font color ="red"></font></p>
            <div class="form-group">
              <label for="userID">User Email</label>
              <input
                type="text" class="form-control" id="userEmail" name="userEmail" value = "" placeholder ="example@styles.com"/>
            </div>
            
            <div class="form-group">
              <label for="userPassword">Password</label>
              <input
                type="text" class="form-control" id="userPassword" name="userPassword" placeholder ="********"/>
            </div>
            
            

            
                
              
            <div>
            <button type="submit" name="logIn" class="btn btn-info">Log In</button>

            </div>
            
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>
  </body>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script> 

    </script>


</html>