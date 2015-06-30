<tr class="impact-economic parent" id="economic">
  <td class="attribute" <?php $_ITEM->html('impact_economic'); ?>><i class="fa fa-usd"></i> Economic Impact</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEconomic', true); ?>
    <?php echo $this->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>



<tr class="decomissioning-actual child child-economic">
  <td class="attribute" <?php $_ITEM->html('impact_economic_decomissioning'); ?>><i class="fa fa-level-up"></i> Decomissioning Costs</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('decomissioningActual', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="tech-import child child-economic">
  <td class="attribute" <?php $_ITEM->html('impact_economic_technology'); ?>><i class="fa fa-level-up"></i> Tech Imports</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEconomicTechImport', true); ?>
  </td>
  <?php } ?>
</tr> 


<tr class="fuel child child-economic">
  <td class="attribute" <?php $_ITEM->html('impact_economic_fossil'); ?>><i class="fa fa-level-up"></i> Fossil Fuel Depletion</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEconomicFossilFuel', true); ?>
  </td>
  <?php } ?>
</tr> 


<tr class="flexibility-yield child child-economic">
  <td class="attribute" <?php $_ITEM->html('impact_economic_flexibility_yield'); ?>><i class="fa fa-level-up"></i> Flexiblity Yield</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('yieldFlexibility', true); ?>
  </td>
  <?php } ?>
</tr> 