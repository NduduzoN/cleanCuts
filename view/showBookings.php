<?php
  
        
      
echo '<div class="container">
    <div>
      <form  action="" method="get">';
          
      $startDate = new DateTime('today');
      $sDate = (FILTER_INPUT (INPUT_POST, 'txtStartDate')?FILTER_INPUT (INPUT_POST, 'txtStartDate'): date_format($startDate,"Y-m-d"));
      
      $endDate = new DateTime('next week');
      $eDate = (FILTER_INPUT (INPUT_POST, 'txtEndDate')?FILTER_INPUT (INPUT_POST, 'txtEndDate'): date_format($endDate,"Y-m-d"));
      
      

echo '         <input type ="date"   name = "txtStartDate" value = ';
          
          echo $sDate;
 echo '         >
          <input type ="date" name = "txtEndDate" value = ';
          echo $eDate;
echo '         >
          
          <input type=hidden name=controller value=booking><input type=hidden name=action value=showBookings>
          <input type ="submit" name = "search" >
      </form>
</div>
      
      <table class="table table-dark">
      <thead>
        <tr>
          
          
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
      <Form action = "" method = "get">';
      foreach($bookings as $booked)
      {

       
      echo "<tr>
        
        
        <td>$booked->booking_date</td>
        <td>$booked->timeframe_description</td>
        <td>$booked->stylist_firstName</td>
        <td>$booked->hairstyle_description</td>
        <td>$booked->booking_status</td>
        <td>
        <button type='submit' name='cancel' value=' $booked->booking_ID' class='btn btn-danger'>Cancel</button>

          
          
          
          
      </td>
      </tr>";
       
       }
    echo '
    <input type=hidden name=controller value=booking><input type=hidden name=action value=bookingCancel>
    </form>

  
        </tbody>
      </table>
      </div>
      </div>

      
       
<!----loading dB stylist bookings onto a table--->
</div>
    </body>';
?>