<table>
  

  
  <tr class="basic-only">


    <td style="width: 100px;">
      <label for="explicit-co2-price">CO<sub>2</sub> price:</label>
    </td>   
    <td style="width: 200px;">
      <input type="text" name="explicit_co2_price" class="elextern-storage right" id="explicit-co2-price" value="<?php echo EXPLICIT_CO2_PRICE; ?>" data-default="<?php echo EXPLICIT_CO2_PRICE; ?>">
    </td>
    
    
    <td style="width: 80px;"></td>
    
    
    <td>
      <label for="explicit-nuclear-waste-price">Nuclear waste price:</label>
    </td>
    <td style="width: 120px;">
      <input type="text" name="explicit_nuclear_waste_price" id="explicit-nuclear-waste-price" class="elextern-storage right" value="<?php echo EXPLICIT_NUCLEAR_WASTE_PRICE; ?>" data-default="<?php echo EXPLICIT_NUCLEAR_WASTE_PRICE; ?>">
    </td>
    
    
  </tr>
  
  
  
  
  
  <tr class="advanced-only">

    
    <td style="width: 100px;">
      <label for="lt-nuclear-waste-treatment">Post-treatment and storage cost:</label>
    </td>    
    <td style="width: 200px;">
      <input type="text" name="lt_nuclear_waste_treatment" class="elextern-storage right" id="lt-nuclear-waste-treatment" value="<?php echo LT_NUCLEAR_WASTE_TREATMENT*100; ?>" data-default="<?php echo LT_NUCLEAR_WASTE_TREATMENT*100; ?>">
    </td>
    
    
    <td style="width: 80px;"></td>
    
    
    <td>
      <label for="lt-climate-start">Climate change effects start:</label>
    </td>
    <td style="width: 120px;">
      <input type="text" name="lt_climate_start" id="lt-climate-start" class="elextern-storage right" value="<?php echo LT_CLIMATE_START; ?>" data-default="<?php echo LT_CLIMATE_START; ?>">
    </td>
 
    
    <td style="width: 80px;"></td>
    
    
    <td class="ajax-implicit advanced-only" colspan="2">
      <div id="ajax-implicit-nuclear-waste-price" class="advanced-only"></div>
      <div id="ajax-implicit-co2-price" class="advanced-only"></div>
    </td>

  </tr>
  
  
  
  
  
  <tr class="advanced-only">
    
    
    <td>
      <label for="lt-climate-cost">Yearly adaptation cost:</label>
    </td>
    <td>
      <input type="text" name="lt_climate_cost" id="lt-climate-cost" class="elextern-storage right" value="<?php echo LT_CLIMATE_COST*100; ?>" data-default="<?php echo LT_CLIMATE_COST*100; ?>">
    </td>
    
    
    <td style="width: 80px;"></td>
    
    
    <td style="width: 120px; vertical-align: middle;" class="advanced-only">
      <label for="carbon-budget">Carbon Budget:</label>
    </td>
    <td style="width: 120px;"  class="advanced-only">
      <input type="text" name="carbon_budget" id="carbon-budget" class="elextern-storage right" value="<?php echo CARBON_BUDGET; ?>" data-default="<?php echo CARBON_BUDGET; ?>">
    </td>
    
    
  </tr>
  
  
  
  
  
</table>