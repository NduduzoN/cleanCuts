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
        
        <input type=hidden name=controller value=booking><input type=hidden name=action value=showStylistBookings>
        <input type ="submit" name = "search" >
    </form>
</div>
      
      <table class="table table-dark">
      <thead>
        <tr>
          
          
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Client</th>
          <th scope="col">Hairstyle</th>
          <th scope="col">Status</th>
          
    
          <th scope="col">Action</th>
        </tr>
      </thead>
<!----showing stylist bookings table--->



      <tbody>
      <Form action = "" method = "get">';
      foreach($stylistbookings as $stylistbooking)
      {

       
      echo "<tr>
        
        
        <td>$stylistbooking->booking_date</td>
        <td>$stylistbooking->timeframe_description</td>
        <td>$stylistbooking->user_ID</td>
        <td>$stylistbooking->hairstyle_description</td>
        <td>$stylistbooking->booking_status</td>
        <td>
        <button type='submit' name='approve' value=' $stylistbooking->booking_ID' class='btn btn-success'>Approve</button>

          
          
          
          
      </td>
      </tr>";
       
       }
    echo '
    <input type=hidden name=controller value=booking><input type=hidden name=action value=bookingApprove>
    </form>

  
        </tbody>
      </table>
      </div>
      </div>

      
       
<!----loading dB stylist bookings onto a table--->
</div>
    </body>';
?>