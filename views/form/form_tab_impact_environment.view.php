<table>
  


  <tr>
    
    
    <td style="width: 180px;" <?php $_ITEM->html('impact_environment_expulsion'); ?>>
      <label for="soc-sick-leave">Unplanned evacuations compensation:</label>
    </td>
    <td style="width: 160px;">
      <input type="text" name="env_compensation" id="env-compensation" class="elextern-storage right" value="<?php echo ENV_COMPENSATION; ?>" data-default="<?php echo ENV_COMPENSATION; ?>">
    </td>

    
    <td style="width: 50px;"></td>

    
    <td style="width: 120px; vertical-align: middle;" class="advanced-only" <?php $_ITEM->html('world_gdp'); ?>>
      <label for="world-gdp">World GDP:</label>
    </td>
    <td style="width: 120px;" class="advanced-only">
      <input type="text" name="world_gdp" id="world-gdp" class="elextern-storage right" value="<?php echo WORLD_GDP; ?>" data-default="<?php echo WORLD_GDP; ?>">
    </td>
    
    
    <td style="width: 50px;"></td>
    
    
    <td class="basic-only" <?php $_ITEM->html('explicit_land_price'); ?>>
      <label for="soc-cancer">Land price:</label>
    </td>
    <td class="basic-only" style="width: 140px;">
      <input type="text" name="explicit_land_price" id="explicit-land-price" class="elextern-storage right" value="<?php echo EXPLICIT_LAND_PRICE; ?>" data-default="<?php echo EXPLICIT_LAND_PRICE; ?>">
    </td>
    
  </tr>
  
  
  
  
   
  <tr>
    
    
    <td style="width: 100px; vertical-align: middle;" class="advanced-only" <?php $_ITEM->html('inhabitable_surface'); ?>>
      <label for="inhabitable-surface">Inhabitable Surface:</label>
    </td>    
    <td style="width: 120px;" class="advanced-only">
      <input type="text" name="inhabitable_surface" id="inhabitable-surface" class="elextern-storage right" value="<?php echo INHABITABLE_SURFACE; ?>" data-default="<?php echo INHABITABLE_SURFACE; ?>">
    </td>
    
    
    <td style="width: 50px;"></td>
    
    
    <td class="ajax-implicit advanced-only" colspan="2">
      <div id="ajax-implicit-land-price" class="advanced-only" <?php $_ITEM->html('implicit_land_price'); ?>></div>
    </td>
    
    
  </tr>
  
   
  
</table>





