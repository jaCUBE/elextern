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
        <?php echo $_EX->htmlUnit('EUR/kW'); ?>
      </td>
      <?php } ?>
    </tr>
    
    
    
    
    
    <tr class="capex-idr" data-placement="left" data-original-title="CAPEX IDR" data-content="Assuming Investment costs are linearly spent during the power plant construction time, CAPEX IDC represents CAPEX Including Discount Rate.">
      <td class="attribute">CAPEX IDR</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="right">
        <?php echo $tech->makeHtml('capexIdr', true); ?>
        <?php echo $_EX->htmlUnit('EUR/kW'); ?>
      </td>
      <?php } ?>
    </tr>
    
    
    
    
    <tr class="grid-connection" data-placement="left" data-original-title="Grid Connection" data-content="Costs for connecting the power plant to the grid.">
      <td class="attribute">Grid Connection</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="right">
        <?php echo $tech->makeHtml('grid_connection'); ?>
        <?php echo $_EX->htmlUnit('EUR/kW'); ?>
      </td>
      <?php } ?>
    </tr>
    
    
    
    
    <tr class="opex" data-placement="left" data-original-title="Operation OPEX%" data-content="Share of CAPEX costs that are due every year for maintenance (fixed costs even without production).">
      <td class="attribute">Operation OPEX%</td>
      <?php foreach($main->tech as $tech){ ?>
      <td class="right">
        <?php echo $tech->makeHtml('grid_connection'); ?>
        <?php echo $_EX->htmlUnit('% CAPEX'); ?>
      </td>
      <?php } ?>
    </tr>
    
    
    
    
    <?php
    
    require 'table_lcoe.php';
    
    if(SHOW_IMPACT_ENVIRONMENT){
      require 'table_impact_environment.php';
    }
    
    if(SHOW_IMPACT_ECONOMIC){
      require 'table_impact_economic.php';
    }
    
    if(SHOW_IMPACT_SOCIAL){
      require 'table_impact_social.php';
    }
    
    if(SHOW_IMPACT_LONGTERM){
      require 'table_impact_longterm.php';
    }
    
    
    
    ?>
    
    
    
    
    
    
   
    
    
    
  </tbody>
  
</table>