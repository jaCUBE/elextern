<tr class="extended-land-use child-social">
  <td class="attribute"><i class="fa fa-level-down"></i> Sick Leaves (per MWh)</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('soc_sick_leave'); ?>
    <?php echo $_EX->htmlUnit('days'); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="extended-land-use child-social">
  <td class="attribute"><i class="fa fa-level-down"></i> Respiratory Diseases (per MWh)</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('soc_respiratory'); ?>
    <?php echo $_EX->htmlUnit('diseases'); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="extended-land-use child-social">
  <td class="attribute"><i class="fa fa-level-down"></i> Cancers (per MWh)</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('soc_cancer'); ?>
    <?php echo $_EX->htmlUnit('cancers'); ?>
  </td>
  <?php } ?>
</tr> 


<tr class="extended-land-use child-social">
  <td class="attribute"><i class="fa fa-level-down"></i> Mortality (per MWh)</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('soc_mortality'); ?>
    <?php echo $_EX->htmlUnit('deaths'); ?>
  </td>
  <?php } ?>
</tr> 

