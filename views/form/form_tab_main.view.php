<div class="row">
  <div class="col-md-7">
    <p style="font-size: 14px;">
      ELEXTERN is a tool that computes the real costs of electricity making, including externalities.
      It clearly distinguishes physical impacts from social parameters that are scenario-dependent,
      to be chosen by the user.

      <span class="btn btn-primary btn-sm" onclick="$('.more').slideToggle()">
        Learn more
      </span>
    </p>
  </div>
  
  
  
  <div class="col-md-5">
    <table>
      <tr>    
        <td style="width: 100px; vertical-align: middle;" <?php $_ITEM->html('discount_rate'); ?>>
          <label for="discount-rate">Discount rate:</label>
        </td>

        <td style="width: 120px;">
          <input type="text" name="discount_rate" id="discount-rate" class="elextern-storage right" value="<?php echo DISCOUNT_RATE*100; ?>" data-default="<?php echo DISCOUNT_RATE*100; ?>">
        </td>
      </tr>

      <tr>
        <td  style="width: 120px;" <?php $_ITEM->html('time_horizon'); ?>>
          <label for="time-horizon"> Time horizon:</label>
        </td>

        <td>
          <input type="text" name="time_horizon" id="time-horizon" class="elextern-storage right" value="<?php echo TIME_HORIZON; ?>" data-default="<?php echo TIME_HORIZON; ?>">
        </td>
      </tr>
    </table>
  </div>
</div>



    
<?php $this->view('about', $data); ?>