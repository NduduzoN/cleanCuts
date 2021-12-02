<?php
 echo ' 
<body>
  <div class="container">
    <div class="row col-md-6 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h2>  Change Password  </h2>
        </div>
        <div class="panel-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="oldPassword">Old Password</label>
              <input
                type="password"
                class="form-control"
                id="oldPassword"
                name="oldPassword"
              />
            </div>
            <div class="form-group">
              <label for="newPassword">New Password</label>
              <input
                type="password"
                class="form-control"
                id="newPassword"
                name="newPassword"
              />
            </div>
            <div class="form-group">
              <label for="confirmPassword">Confirm New Password</label>
              <input
                type="password"
                class="form-control"
                id="confirmPassword"
                name="confirmPassword"
              />
            </div>
            
              
            
            <input type=hidden name=controller value=login><input type=hidden name=action value=changePassword>
            <input type="submit"  name ="change"class="btn btn-primary" />
          </form>
        </div>
        <div class="panel-footer text-right">
          
        </body>';
?>
