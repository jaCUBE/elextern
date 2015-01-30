<table>

  
  
  
  <tr>
    
    <td style="width: 120px; vertical-align: middle;">
      <label for="discount-rate">Discount rate:</label>
    </td>
    
    <td style="width: 140px;">
      <input type="text" name="discount_rate" id="discount-rate" class="elextern-storage right" value="<?php echo DISCOUNT_RATE*100; ?>" data-default="<?php echo DISCOUNT_RATE*100; ?>">
    </td>
    
    <td class="registered-only" style="width: 80px;">
      
    </td>
    
    <td class="registered-only">
      Account e-mail:
    </td>
    
    <td class="registered-only">
      <?php echo $this->logged->email; ?>
    </td>
  </tr>
  
  
  
  
  <tr>
    
    <td>
      <label for="time-horizon"> Time horizon:</label>
    </td>
    
    <td>
      <input type="text" name="time_horizon" id="time-horizon" class="elextern-storage right" value="<?php echo TIME_HORIZON; ?>" data-default="<?php echo TIME_HORIZON; ?>">
    </td> 
    
    
    <td class="registered-only" style="width: 80px;">
      
    </td>
    
    <td class="registered-only">
      Logout:
    </td>
    
    <td class="registered-only">
      <div class="btn btn-xs btn-danger" onclick="logout();">
        <i class="fa fa-key"></i> Logout
      </div>
    </td>
  </tr>

  
  
  
</table>