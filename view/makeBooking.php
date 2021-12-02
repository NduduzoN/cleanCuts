<?php 

echo '<body>
 
  <div class="container">
    <div class="row col-md-6 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h2>  Make Booking  </h2>
        </div>
        <div class="panel-body">
        
          
        <form action="" method="get">
            <div class="form-group">';
            
            
            $startDate = new DateTime('tomorrow');
            $sDate = (FILTER_INPUT (INPUT_POST, 'bdate')?FILTER_INPUT (INPUT_POST, 'bdate'): date_format($startDate,"Y-m-d"));
            
echo '               
                      <label for="date">Date</label>
                      <input
                        type="date"
                        class=""
                        id="bdate"
                        name="bdate"
            value = ';
             echo $sDate;

              
  echo '             
            </div>
            <div class="form-group">
            <!--------- adding timeslote from the booking table onto the select option-------->
            
              <label for="time">Time</label>
              <select id="time" name="time" class="form-select form-select-sm" aria-label=".form-select-sm example">';
              
              foreach ($time as $timeslot) {
                
                $selected = '';
                print_r( "<option value = ".$timeslot->timeframeID.$selected.">".$timeslot->timeframedescription."</option>");
              }


echo '       </select>

            </div>
            <!------inserting select values from database    --->
            <div class="form-group">
            <!--------- adding hairstylist description from the hairstyle table onto the select option-------->
            
            
              <label for="hairstyle">hairstyle</label>
              
              <select id="hairstyle" name="hairstyle" class="form-select form-select-sm" aria-label=".form-select-sm example">';
              
              foreach ($hairstyle as $hairstyles) {
                
                $selected = '';
                print_r( "<option value = ".$hairstyles->timeframeID.$selected.">".$hairstyles->timeframedescription."</option>");
              }


echo '      </select>
            </div>

            <div class="form-group">
            <!--------- adding stylist description from the globalhs db onto the select option-------->
            
            
              <label for="stylist">Stylist</label>
              
              <select id="stylist" name="stylist" class="form-select form-select-sm" aria-label=".form-select-sm example">';
              
              foreach ($stylist as $stylists) {
                
                $selected = '';
                print_r( "<option value = ".$stylists->timeframeID.$selected.">".$stylists->timeframedescription."</option>");
              }


echo '      </select>
            </div>

            
                
              
            <div>
            
            
            <input type=hidden name=controller value=booking><input type=hidden name=action value=makeBooking>

            
              <div class="d-flex justify-content-center">
            <input type=submit name="book" class="btn btn-dark" value="Book"></td></tr>
              </div>
            </div>';
            
echo '            
          </form>
          <!------Make booking    --->
          
        </div>
        
      </div>
    </div>
  </div>';
  ?>