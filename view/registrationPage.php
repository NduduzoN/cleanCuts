<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>

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
                        <a class="nav-link" href="?controller=login&action=viewhome">Home</a>
                    </li>
                   
		    <li class="nav-item">
                    <a class="nav-link" href="?controller=login&action=viewgallery">Gallery</a>
                    </li>
		    <li class="nav-item">
		    <a class="nav-link" href="?controller=login&action=viewteam">Team</a>
                    </li>
		    <li class="nav-item">
                    <a class="nav-link" href="?controller=login&action=login">Log In</a>
                    </li>
                    
                    
                </ul>
                
                <a class="nav-icon" href="javascript:void(0);"><span></span><span></span><span></span></a>
            </div>
        </nav>
    </div>


  </head>
  <body>
    
    

    <!--form-->
    <div class="container">
      <div class="row col-md-6 col-md-offset-4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h2>Registration Form</h2>
          </div>
          <div class="panel-body">
            <form action="" method="get">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Username(Email)</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
                </div>
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="confirmPassword"
                  name="confirmPassword"
                />
              </div>
              <input type=hidden name=controller value=customer><input type=hidden name=action value=addNew>
              <div class="d-flex justify-content-center">
	        
          <input type=submit name="signup" class="btn btn-dark" value="Sign Up"></td></tr>
          </div>
            </form>
          </div>
          <div class="panel-footer text-right">
            
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
