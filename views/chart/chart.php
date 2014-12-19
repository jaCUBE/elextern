<?php 

require 'views/form.php';

?>


<div id="legend">
  <span class="label fuel" data-placement="left" data-original-title="LCOE" data-content="Levelised Costs Of Electricity.">
    Fuel
  </span>
  
  <span class="label capex-actual" data-placement="left" data-original-title="Actual CAPEX" data-content="Operation costs per produced MWh given Load Factor.">
    Actual CAPEX
  </span>
  
  <span class="label opex-actual" data-placement="left" data-original-title="Actual OPEX" data-content="Discounted investment costs per produced MWh over the power plant lifetime and given R and Load Factor.">
    Actual OPEX
  </span>
  
  
  <span class="label environmental" data-placement="left" data-original-title="Environmental Impact" data-content="Computes the ecological footprint of technologies based on Life cycle assessment: land lost for mining and installing facilities, no man's land from nuclear incidents, and all related expulsions. Value of the inhabitable land depends on the discount rate. Since there is no economy without Earth, GDP can be considered as the 'return on investments' from the Earth capital, i.e. the fraction (discount rate) of its value.">
    Environmental Impact
  </span>
  
  <span class="label economic" data-placement="left" data-original-title="Local Economic Impact" data-content="Computes all kind of monetary losses for the local economy: Technology and/or fuel imports from abroad since they don't benefit local population (no jobs). Also fossil fuel depletion is a loss, and future decomissionning costs are a burden for future generations.">
    Local Economic Impact
  </span>
  
  <span class="label social" data-placement="left" data-original-title="Social Impact" data-content="Computes all kind of health impacts (diseases and deaths) induced by air-pollution or radiations. As these problems are managed by health insurance systems and not by the first polluer, these costs must appear clearly">
    Social Impact
  </span>
  
  <span class="label longterm" data-placement="left" data-original-title="Longterm Impact" data-content=" When do we expect climate change impacts to start to affect our lifes.">
    Longterm Impact
  </span>
</div>



<div id="chart_div"></div>