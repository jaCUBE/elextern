<tr class="efficiency" data-placement="bottom" data-original-title="Economic Impact" data-content="Efficiency of energy production.">
  <td class="attribute">Efficiency</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="center"><?php echo $tech->eco_efficiency * 100; ?>&nbsp;%</td>
  <?php } ?>
</tr>





<tr class="load-factor" data-placement="bottom" data-original-title="Load Factor" data-content="">
  <td class="attribute">Load Factor</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="center"><?php echo $tech->load_factor * 100; ?>&nbsp;%</td>
  <?php } ?>
</tr>





<tr class="dispatchability" data-placement="bottom" data-original-title="Dispatchiblity" data-content="If the power technology can be activated 'on demand' or not.">
  <td class="attribute">Dispatchable Source?</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="center">
    <?php if($tech->dispatchable){ ?>
    <i class="fa fa-check"></i>
    <?php } ?>
  </td>
  <?php } ?>
</tr>




<tr class="fossil-fuel" data-placement="bottom" data-original-title="Uses Fossil Fuel?" data-content="If the fuel used is fossil or not.">
  <td class="attribute">Uses Fossil Fuel?</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="center">
    <?php if($tech->eco_fossil_fuel){ ?>
    <i class="fa fa-check"></i>
    <?php } ?>
  </td>
  <?php } ?>
</tr>


<tr class="construction_time" data-placement="bottom" data-original-title="Life Time" data-content="Time during which the power plant can produce electricity.">
  <td class="attribute">Life Time</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="center">
    <?php echo $tech->lifetime; ?>
    <?php echo $_EX->htmlUnit('year'); ?>
  </td>
  <?php } ?>
</tr>



<tr class="construction_time" data-placement="bottom" data-original-title="Construction Time" data-content="Time before the power plant operates.">
  <td class="attribute">Construction Time</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="center">
    <?php echo $tech->construction_time; ?>
    <?php echo $_EX->htmlUnit('year'); ?>
  </td>
  <?php } ?>
</tr>




<tr class="capex" data-placement="bottom" data-original-title="CAPEX" data-content="CAPital EXpenditures: investment costs.">
  <td class="attribute">CAPEX</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('capex'); ?>
    <?php echo $_EX->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr>





<tr class="capex-idr" data-placement="bottom" data-original-title="CAPEX IDR" data-content="Assuming Investment costs are linearly spent during the power plant construction time, CAPEX IDR represents CAPEX Including Discount Rate.">
  <td class="attribute">CAPEX IDR</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('capexIdr', true); ?>
    <?php echo $_EX->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr>




<tr class="grid-connection" data-placement="bottom" data-original-title="Grid Connection" data-content="Costs for connecting the power plant to the grid.">
  <td class="attribute">Grid Connection</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('grid_connection'); ?>
    <?php echo $_EX->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr>




<tr class="opex" data-placement="bottom" data-original-title="Operation OPEX%" data-content="Share of CAPEX costs that are due every year for maintenance (fixed costs even without production).">
  <td class="attribute">Operation OPEX%</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('opexOfCapex', true); ?>
    <?php echo $_EX->htmlUnit('% CAPEX'); ?>
  </td>
  <?php } ?>
</tr>