<tr class="decomissioning-actual child-economic">
  <td class="attribute" <?php $_ITEM->html('impact_economic_decomissioning'); ?>><i class="fa fa-level-up"></i> Decomissioning Costs</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('eco_decomissionning'); ?>
    <?php echo $this->htmlUnit('% CAPEX'); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="tech-import child-economic">
  <td class="attribute" <?php $_ITEM->html('impact_economic_foreign_purchases'); ?>><i class="fa fa-level-up"></i> Foreign Purchases</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('eco_foreign_purchases'); ?>
    <?php echo $this->htmlUnit('% CAPEX'); ?>
  </td>
  <?php } ?>
</tr> 