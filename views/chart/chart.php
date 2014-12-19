<?php 

require 'views/form.php';

?>

<strong>Click on legend label for hide selected impact:</strong>
  
<div id="legend">
  <span class="label help capex-actual" data-placement="left" data-original-title="Actual CAPEX" data-content="Operation costs per produced MWh given Load Factor.">
    Actual CAPEX
  </span>
  
  <span class="label help opex-actual" data-placement="left" data-original-title="Actual OPEX" data-content="Discounted investment costs per produced MWh over the power plant lifetime and given Discount Rate and Load Factor.">
    Actual OPEX
  </span>
  
  <span class="label help fuel" data-placement="left" data-original-title="Fuel" data-content="Cost of fuel used in the power plant for producing electricity (variable cost during production only).">
    Fuel
  </span>
  
  
  <span class="label hand toggle-checkbox environmental" data-checkbox="impact-environment" data-placement="left" data-original-title="Environmental Impact" data-content="Computes the ecological footprint of technologies based on Life cycle assessment: land lost per year of operation for mining and installing facilities, no man's land from nuclear incidents, and all related expulsions. Since there is no economy without Earth, Every destroyed land destroyed its surface share on GDP.">
    Environmental Impact
  </span>
  
  <span class="label hand toggle-checkbox economic" data-checkbox="impact-economic" data-placement="left" data-original-title="Local Economic Impact" data-content="Computes all kind of monetary losses for the local economy: Technology and/or fuel imports from abroad since they don't benefit local population (no jobs). Also fossil fuel depletion is a loss, and future decomissionning costs are a burden for future generations.">
    Local Economic Impact
  </span>
  
  <span class="label hand toggle-checkbox social" data-checkbox="impact-social" data-placement="left" data-original-title="Social Impact" data-content="Computes all kind of health impacts (diseases and deaths) induced by air-pollution or radiations. As these problems are managed by health insurance systems and not by the first polluer, these costs must appear clearly">
    Social Impact
  </span>
  
  <span class="label hand toggle-checkbox longterm" data-checkbox="impact-longterm" data-placement="left" data-original-title="Longterm Impact" data-content=" When do we expect climate change impacts to start to affect our lifes.">
    Longterm Impact
  </span>
</div>



<div id="chart_div"></div>