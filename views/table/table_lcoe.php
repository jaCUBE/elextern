<tr class="lcoe parent" id="lcoe" data-placement="left" data-original-title="LCOE" data-content="Levelised Costs Of Electricity.">
  <td class="attribute">
    LCOE
    <?php echo $_EX->htmlUnit('Click to expand'); ?>
  </td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('lcoe', true); ?>
    <?php echo $_EX->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr>




<tr class="fuel child child-lcoe" data-placement="left" data-original-title="Actual CAPEX" data-content="Operation costs per produced MWh given Load Factor LF.">
  <td class="attribute">Fuel</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('fuel', true); ?>
    <?php echo $_EX->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="capex-actual child child-lcoe" data-placement="left" data-original-title="Actual CAPEX" data-content="Operation costs per produced MWh given Load Factor LF.">
  <td class="attribute">Actual CAPEX</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('capexActual', true); ?>
    <?php echo $_EX->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="opex-actual child child-lcoe" data-placement="left" data-original-title="Actual OPEX" data-content="Discounted investment costs per produced MWh over the power plant lifetime and given R and Load Factor.">
  <td class="attribute">Actual OPEX</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('opexActual', true); ?>
    <?php echo $_EX->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="opex-actual child child-lcoe" data-placement="left" data-original-title="Flexibility Yield" data-content="Interpolated according to ELIX index (Electricity spot price for France-Germany-Austria-Switzerland market).">
  <td class="attribute">Flexibility Yield</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('yieldFlexibility', true); ?>
    <?php echo $_EX->htmlUnit(''); ?>
  </td>
  <?php } ?>
</tr> 