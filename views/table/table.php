<?php 

require 'views/form_basic.php';

$main = new TechList();

?>



<strong>Filter:</strong><br />
<span class="btn btn-xs btn-info" onclick="filter_table('all');">All</span>

<span class="btn-group">
  <span class="btn btn-xs btn-default" onclick="filter_table('.fossil');">Fossil only</span>
  <span class="btn btn-xs btn-default" onclick="filter_table('.dispatchable');">Dispatchable only</span>
</span>



<table id="table-sources">
  <?php echo $main->htmlTableHeader(); ?>
  
  <tbody>
    
    <tr class="efficiency" data-placement="left" data-original-title="Local Economic Impact" data-content="Efficiency of energy production.">
      <td class="attribute">Efficiency</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="center"><?php echo $tech->eco_efficiency * 100; ?>&nbsp;%</td>
      <?php } ?>
    </tr>
    
    <tr class="dispatchability" data-placement="left" data-original-title="Dispatchiblity" data-content="If the power technology can be activated 'on demand' or not.">
      <td class="attribute">Dispatchable Source?</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="center">
        <?php if($tech->dispatchable){ ?>
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
    
    if(SHOW_IMPACT_ENVIRONMENT){
      require 'table_impact_environment.php';
    }
    
    if(SHOW_IMPACT_ECONOMIC){
      require 'table_impact_economic.php';
    }
    
    if(SHOW_IMPACT_SOCIAL){
      require 'table_impact_social.php';
    }
    
    
    
    ?>
    
    
    
    
    
    
   
    
    
    
  </tbody>
  
</table>