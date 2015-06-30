<tr class="efficiency">
  <td class="attribute" <?php $_ITEM->html('efficiency'); ?>>Efficiency</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="center"><?php echo $tech->eco_efficiency * 100; ?>&nbsp;%</td>
  <?php } ?>
</tr>





<tr class="load-factor">
  <td class="attribute" <?php $_ITEM->html('load_factor'); ?>>Load Factor</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="center"><?php echo $tech->load_factor * 100; ?>&nbsp;%</td>
  <?php } ?>
</tr>





<tr class="dispatchability">
  <td class="attribute" <?php $_ITEM->html('dispatchability'); ?>>Dispatchable Source?</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="center">
    <?php if($tech->dispatchable){ ?>
    <i class="fa fa-check"></i>
    <?php } ?>
  </td>
  <?php } ?>
</tr>




<tr class="fossil-fuel">
  <td class="attribute" <?php $_ITEM->html('impact_economic_fossil'); ?>>Uses Fossil Fuel?</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="center">
    <?php if($tech->eco_fossil_fuel){ ?>
    <i class="fa fa-check"></i>
    <?php } ?>
  </td>
  <?php } ?>
</tr>


<tr class="construction_time">
  <td class="attribute" <?php $_ITEM->html('lifetime'); ?>>Life Time</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="center">
    <?php echo $tech->makeHtml('lifetime'); ?>
    <?php echo $this->htmlUnit('year'); ?>
  </td>
  <?php } ?>
</tr>



<tr class="construction_time">
  <td class="attribute" <?php $_ITEM->html('construction_time'); ?>>Construction Time</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="center">
    <?php echo $tech->construction_time; ?>
    <?php echo $this->htmlUnit('year'); ?>
  </td>
  <?php } ?>
</tr>




<tr class="capex">
  <td class="attribute" <?php $_ITEM->html('capex'); ?>>CAPEX</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('capex'); ?>
    <?php echo $this->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr>





<tr class="capex-idr">
  <td class="attribute" <?php $_ITEM->html('capex_idr'); ?>>CAPEX IDR</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('capexIdr', true); ?>
    <?php echo $this->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr>




<tr class="grid-connection">
  <td class="attribute" <?php $_ITEM->html('grid_connection'); ?>>Grid Connection</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('grid_connection'); ?>
    <?php echo $this->htmlUnit('EUR/kW'); ?>
  </td>
  <?php } ?>
</tr>




<tr class="opex">
  <td class="attribute" <?php $_ITEM->html('opex'); ?>>Operation OPEX%</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('opexOfCapex', true); ?>
    <?php echo $this->htmlUnit('% CAPEX'); ?>
  </td>
  <?php } ?>
</tr>