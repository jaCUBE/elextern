<tr class="lcoe parent" id="lcoe">
  <td class="attribute" <?php $_ITEM->html('lcoe'); ?>><i class="fa fa-bolt"></i> LCOE</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('lcoe', true); ?>
    <?php echo $this->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>




<tr class="fuel child child-lcoe">
  <td class="attribute" <?php $_ITEM->html('fuel'); ?>><i class="fa fa-level-up"></i> Fuel</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('fuel', true); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="capex-actual child child-lcoe">
  <td class="attribute" <?php $_ITEM->html('capex_actual'); ?>><i class="fa fa-level-up"></i>  Actual CAPEX</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('capexActual', true); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="opex-actual child child-lcoe">
  <td class="attribute" <?php $_ITEM->html('opex_actual'); ?>><i class="fa fa-level-up"></i>  Actual OPEX</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('opexActual', true); ?>
  </td>
  <?php } ?>
</tr> 