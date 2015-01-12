<div class="nav navbar-nav navbar-right">
  <a href="#" onclick="default_form();"  class="btn btn-primary btn-xs"><i class="fa fa-undo"></i> Default impact values</a>
</div>


<table class="full-width user-input">

  <tr>

    <td style="width: 140px;">
      <label for="discount-rate"><i class="fa fa-line-chart"></i> Discount Rate:</label><br />
      <input type="text" name="discount_rate" id="discount-rate" class="elextern-storage" value="<?php echo DISCOUNT_RATE*100; ?>" data-default="<?php echo DISCOUNT_RATE*100; ?>">
    </td>


    <td style="width: 160px;">
      <label for="time-horizon"><i class="fa fa-clock-o"></i> Time Horizon:</label><br />
      <input type="text" name="time_horizon" id="time-horizon" class="elextern-storage" value="<?php echo TIME_HORIZON; ?>" data-default="<?php echo TIME_HORIZON; ?>">
    </td> 

    <td style="width: 60px;">

    </td>


    <?php require 'form_another.php'; ?>


  </tr>

</table>

<?php if(!empty($_GET['type'])){ ?>
  <input type="hidden" name="table_type" value="<?php echo $_GET['type']; ?>" />
<?php } ?>


<div class="right" style="font-size: 8pt;">
  Implicit CO<sub>2</sub> price is <span class="ajax-co2"></span> €/tCO<sub>2</sub>.
</div>