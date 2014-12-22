<tr class="impact-economic parent" id="economic" data-placement="bottom" data-original-title="Economic Impact" data-content="Computes all kind of monetary losses for the local economy: Technology and/or fuel imports from abroad since they don't benefit local population (no jobs). Also fossil fuel depletion is a loss, and future decomissionning costs are a burden for future generations.">
  <td class="attribute">
    Economic Impact
    <?php echo $_EX->htmlUnit('Click to expand'); ?>
  </td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEconomic', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>



<tr class="decomissioning-actual child child-economic" data-placement="bottom" data-original-title="Actual Decomissioning Costs" data-content="Net to present value of costs required to dismantle the plant after operation.">
  <td class="attribute">Decomissioning Costs</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('decomissioningActual', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="tech-import child child-economic" data-placement="bottom" data-original-title="Tech Import" data-content="Share of imports that don't benefit the local economy. Less than 100% in case of a strong mutually beneficiary relationship with a foreign country.">
  <td class="attribute">Tech Imports</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEconomicTechImport', true); ?>
  </td>
  <?php } ?>
</tr> 


<tr class="fuel child child-economic" data-placement="bottom" data-original-title="Fuel" data-content="Cost of fuel used in the power plant for producing electricity (variable cost during production only).">
  <td class="attribute">Fossil Fuel Depletion</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEconomicFossilFuel', true); ?>
  </td>
  <?php } ?>
</tr> 


<tr class="flexibility-yield child child-economic" data-placement="bottom" data-original-title="Flexibility Yield" data-content="Interpolated according to ELIX index (Electricity spot price for France-Germany-Austria-Switzerland market)">
  <td class="attribute">Flexiblity Yield</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('yieldFlexibility', true); ?>
  </td>
  <?php } ?>
</tr> 