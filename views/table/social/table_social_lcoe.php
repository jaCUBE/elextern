<tr class="lcoe parent" id="lcoe" data-placement="bottom" data-original-title="LCOE" data-content="Levelised Costs Of Electricity.">
  <td class="attribute">
    LCOE
  </td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('lcoe', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>




<tr class="fuel child child-lcoe" data-placement="bottom" data-original-title="Actual CAPEX" data-content="Operation costs per produced MWh given Load Factor LF.">
  <td class="attribute"><i class="fa fa-level-up"></i> Fuel</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('fuel', true); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="capex-actual child child-lcoe" data-placement="bottom" data-original-title="Actual CAPEX" data-content="Discounted investment costs per produced MWh over the power plant lifetime and given Discount Rate and Load Factor">
  <td class="attribute"><i class="fa fa-level-up"></i>  Actual CAPEX</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('capexActual', true); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="opex-actual child child-lcoe" data-placement="bottom" data-original-title="Actual OPEX" data-content="Operation costs per produced MWh given Load Factor LF.">
  <td class="attribute"><i class="fa fa-level-up"></i>  Actual OPEX</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('opexActual', true); ?>
  </td>
  <?php } ?>
</tr> 