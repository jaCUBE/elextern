<form action="" method="post">

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
      <label for="climate-horizon">Time Horizon:</label>&nbsp;&nbsp;
    </td>
    <td>
      <label for="impact-environtmental">Environmental</label>
    </td>
    <td>
      <label for="impact-economic">Economic</label>
    </td>
    <td>
      <label for="impact-social">Social</label>
    </td>
  </tr>
  
  <tr>
    <td>
      <input type="text" name="discount_rate" id="discount-rate" value="<?php echo $_IN_COST->discount_rate*100; ?>">
    </td>
    <td>
      <input type="text" name="climate_horizon" id="climate-horizon" value="<?php echo $_IN_COST->climate_horizon; ?>">
    </td> 
    <td>
      <input type="checkbox" name="impact_environtmental" id="impact-environtmental" class="bootstrap-switch" value="true" <?php if($_IN_IMPACT->impact_environtmental){ ?> checked <?php } ?> />
    </td>
    <td>
      <input type="checkbox" name="impact_economic" id="impact-economic" class="bootstrap-switch" value="true" <?php if($_IN_IMPACT->impact_economic){ ?> checked <?php } ?> />
    </td>
    <td>
      <input type="checkbox" name="impact_social" id="impact-social" class="bootstrap-switch" value="true" <?php if($_IN_IMPACT->impact_social){ ?> checked <?php } ?> />
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
  <button type="submit" class="btn btn-lg btn-primary">
    <i class="fa fa-calculator"></i> Recalculate
  </button>
</div>

  
</form>