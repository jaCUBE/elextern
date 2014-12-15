<form action="" id="form-basic" method="post">

<table class="full-width user-input">
  
  <tr>
    <td colspan="2"></td>
    <td colspan="3" class="center"><strong>IMPACTS</strong></td>
  </tr>
  
  <tr>
    <td>
      <label for="discount-rate">Discount Rate:</label>&nbsp;&nbsp;
    </td>
    <td>
      <label for="time-horizon">Time Horizon:</label>&nbsp;&nbsp;
    </td>
    <td>
      <label for="impact-environmental">Environmental</label>
    </td>
    <td>
      <label for="impact-economic">Economic</label>
    </td>
    <td>
      <label for="impact-social">Social</label>
    </td>
    <td>
      <label for="impact-longterm">Longterm</label>
    </td>
    
  </tr>
  
  <tr>
    <td>
      <input type="text" name="discount_rate" id="discount-rate" value="<?php echo DISCOUNT_RATE*100; ?>">
    </td>
    <td>
      <input type="text" name="time_horizon" id="time-horizon" value="<?php echo TIME_HORIZON; ?>">
    </td> 
    <td>
      <input type="checkbox" name="impact_environment" id="impact-environment" class="bootstrap-switch" value="true" <?php if(SHOW_IMPACT_ENVIRONMENT){ ?> checked <?php } ?> />
    </td>
    <td>
      <input type="checkbox" name="impact_economic" id="impact-economic" class="bootstrap-switch" value="true" <?php if(SHOW_IMPACT_ECONOMIC){ ?> checked <?php } ?> />
    </td>
    <td>
      <input type="checkbox" name="impact_social" id="impact-social" class="bootstrap-switch" value="true" <?php if(SHOW_IMPACT_SOCIAL){ ?> checked <?php } ?> />
    </td>
    <td>
      <input type="checkbox" name="impact_longterm" id="impact-longterm" class="bootstrap-switch" value="true" <?php if(SHOW_IMPACT_LONGTERM){ ?> checked <?php } ?> />
    </td>
    <td>
      <button class="btn btn-default">
        More...
      </button>
    </td>
  </tr>
  
</table>

<br />
  
<div class="center">
  <button class="btn btn-submit btn-lg btn-primary">
    <i class="fa fa-calculator"></i> Recalculate
  </button>
</div>

  
</form>