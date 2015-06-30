<?php 

$this->view('form', $data);

?>



<div id="legend">
  <span class="label hand toggle-checkbox capex-actual"  data-checkbox="#show-capex" <?php $_ITEM->html('capex'); ?>>
    <i class="fa fa-eye"></i> CAPEX
  </span>
  
  <span class="label hand toggle-checkbox opex-actual"  data-checkbox="#show-opex" <?php $_ITEM->html('opex'); ?>>
    <i class="fa fa-eye"></i> OPEX
  </span>
  
  <span class="label hand toggle-checkbox fuel" data-checkbox="#show-fuel" <?php $_ITEM->html('fuel'); ?>>
    <i class="fa fa-eye"></i> Fuel
  </span>

  
  
  <span class="label hand toggle-checkbox economic" data-checkbox="#show-impact-economic" <?php $_ITEM->html('impact_economic'); ?>>
    <i class="fa fa-eye"></i>  Economic Impact
  </span>
  
  <br class="demo-only" />
  
  <span class="label hand toggle-checkbox social" data-checkbox="#show-impact-social" <?php $_ITEM->html('impact_social'); ?>>
    <i class="fa fa-eye"></i> Social Impact
  </span>  
  
  <span class="label hand toggle-checkbox environmental" data-checkbox="#show-impact-environment" <?php $_ITEM->html('impact_environment'); ?>>
    <i class="fa fa-eye"></i> Environmental Impact
  </span>

  <span class="label hand toggle-checkbox longterm" data-checkbox="#show-impact-longterm" <?php $_ITEM->html('impact_economic'); ?>>
    <i class="fa fa-eye"></i> Long-term Impact
  </span>
</div>



<div id="chart_div"></div>