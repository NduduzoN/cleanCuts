<body>
  <div class="container">
    <div class="row col-md-5 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h2>  Log in  </h2>
        </div>
        <div class="panel-body">
          <form action="" method="post">
          
                  <label for="client" class="radio-inline"
                    ><input type="radio" name="userType" value="3" id="client" />Client</label>
                  <label for="stylist" class="radio-inline"
                    ><input type="radio" name="userType" value="2" id="stylist" />Stylist</label>
                  <label for="admin" class="radio-inline">
                      <input type="radio" name="userType" value="1" id="admin"/>Admin</label>
		
          <div class="form-group">
          </div>
          <!-------velue entered verification--------->
            <p><font color ="red"><?php if(isset($name_emptyInputError)){echo $name_emptyInputError;}  ?></font></p>
            <div class="form-group">
              <label for="userID">User Email</label>
              <input
                type="password" class="form-control" id="userEmail" name="userEmail" value = "" placeholder ="example@styles.com"/>
            </div>
            
            <div class="form-group">
              <label for="userPassword">Password</label>
              <input
                type="password" class="form-control" id="userPassword" name="userPassword" placeholder ="********"/>
            </div>
          
            <div>
            
            <input type=hidden name=controller value=login><input type=hidden name=action value=login>
            <div class="d-flex justify-content-center">
	        
          <input type=submit name="book" class="btn btn-dark" value="LOG IN"></td></tr>
          </div> 

            </div>
            
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>
  </body>