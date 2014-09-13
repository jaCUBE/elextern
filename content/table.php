<?php 

require 'form_basic.php';

$main = new TechList();

?>




<table id="table-sources">
  <thead>
    <?php echo $main->tableHeader(); ?>
  </thead>
  
  <tbody>
    
    <tr class="efficiency" data-placement="left" data-original-title="Local Economic Impact" data-content="Efficiency of energy production.">
      <td class="attribute">Efficiency</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="center"><?php echo $tech->efficiency * 100; ?>&nbsp;%</td>
      <?php } ?>
    </tr>
    
    <tr class="dispatchability" data-placement="left" data-original-title="Dispatchiblity" data-content="If the power technology can be activated 'on demand' or not.">
      <td class="attribute">Dispatchable Source?</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="center">
        <?php if($tech->dispatchability){ ?>
        <i class="fa fa-check"></i>
        <?php } ?>
      </td>
      <?php } ?>
    </tr>
    
    <tr class="fossil-fuel" data-placement="left" data-original-title="Uses Fossil Fuel?" data-content="If the fuel used is fossil or not.">
      <td class="attribute">Uses Fossil Fuel?</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="center">
        <?php if($tech->eco_fossil_fuel){ ?>
        <i class="fa fa-check"></i>
        <?php } ?>
      </td>
      <?php } ?>
    </tr>
    
    <tr class="construction_time" data-placement="left" data-original-title="Construction Time" data-content="Time before the power plant operates.">
      <td class="attribute">Construction Time</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="center">
        <?php echo $tech->construction_time; ?>
        <?php echo $_EX->htmlUnit('year'); ?>
      </td>
      <?php } ?>
    </tr>
    
    <tr class="capex" data-placement="left" data-original-title="CAPEX" data-content="CAPital EXpenditures: investment costs.">
      <td class="attribute">CAPEX</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="right">
        <?php echo $tech->makeHtml('capex'); ?>
        <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
      </td>
      <?php } ?>
    </tr>
    
    
    <?php
    
    if($_DATA_IMPACT->impact_environtmental){
      require 'table_impact_environtmental.php';
    }
    
    if($_DATA_IMPACT->impact_economic){
      require 'table_impact_economic.php';
    }
    
    
    
    ?>
    
    
    
    
    
    
   
    
    
    
  </tbody>
  
</table>