  <table class="full-width user-input">

    <tr>

      <td style="width: 140px;">
        <label for="discount-rate">Discount Rate:</label><br />
        <input type="text" name="discount_rate" id="discount-rate" value="<?php echo DISCOUNT_RATE*100; ?>">
      </td>


      <td style="width: 160px;">
        <label for="time-horizon">Time Horizon:</label><br />
        <input type="text" name="time_horizon" id="time-horizon" value="<?php echo TIME_HORIZON; ?>">
      </td> 

      <td style="width: 60px;">
        
      </td>
      
      
      <?php require 'form_another.php'; ?>


    </tr>

  </table>