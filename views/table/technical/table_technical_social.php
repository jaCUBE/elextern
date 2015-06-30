<tr class="extended-land-use child-social">
  <td class="attribute" <?php $_ITEM->html('impact_social_sick_leaves'); ?>><i class="fa fa-level-up"></i> Sick Leaves (per MWh)</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('soc_sick_leave'); ?>
    <?php echo $this->htmlUnit('days'); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="extended-land-use child-social">
  <td class="attribute" <?php $_ITEM->html('impact_social_respiratory'); ?>><i class="fa fa-level-up"></i> Respiratory Diseases (per MWh)</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('soc_respiratory'); ?>
    <?php echo $this->htmlUnit('diseases'); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="extended-land-use child-social">
  <td class="attribute" <?php $_ITEM->html('impact_social_cancer'); ?>><i class="fa fa-level-up"></i> Cancers (per MWh)</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('soc_cancer'); ?>
    <?php echo $this->htmlUnit('cancers'); ?>
  </td>
  <?php } ?>
</tr> 


<tr class="extended-land-use child-social">
  <td class="attribute" <?php $_ITEM->html('impact_social_mortality'); ?>><i class="fa fa-level-up"></i> Mortality (per MWh)</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('soc_mortality'); ?>
    <?php echo $this->htmlUnit('deaths'); ?>
  </td>
  <?php } ?>
</tr> 

