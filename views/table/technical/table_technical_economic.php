<tr class="decomissioning-actual child-economic">
  <td class="attribute"><i class="fa fa-level-down"></i> Decomissioning Costs</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('eco_decomissionning'); ?>
    <?php echo $_EX->htmlUnit('% CAPEX'); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="tech-import child-economic">
  <td class="attribute"><i class="fa fa-level-down"></i> Foreign Purchases</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('eco_foreign_purchases'); ?>
    <?php echo $_EX->htmlUnit('% CAPEX'); ?>
  </td>
  <?php } ?>
</tr> 


<tr class="fuel child-economic">
  <td class="attribute"><i class="fa fa-level-down"></i> Efficiency</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('eco_efficiency'); ?> %
  </td>
  <?php } ?>
</tr> 
