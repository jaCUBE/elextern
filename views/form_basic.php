  <table class="full-width user-input">

    <tr>

      <td style="width: 140px;">
        <label for="discount-rate"><i class="fa fa-line-chart"></i> Discount Rate:</label><br />
        <input type="text" name="discount_rate" id="discount-rate" value="<?php echo DISCOUNT_RATE*100; ?>">
      </td>


      <td style="width: 160px;">
        <label for="time-horizon"><i class="fa fa-clock-o"></i> Time Horizon:</label><br />
        <input type="text" name="time_horizon" id="time-horizon" value="<?php echo TIME_HORIZON; ?>">
      </td> 

      <td style="width: 60px;">
        
      </td>
      
      
      <?php require 'form_another.php'; ?>


    </tr>

  </table>