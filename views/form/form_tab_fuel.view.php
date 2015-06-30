<table>
  
  
  
  <tr>
    
    
    <td <?php $_ITEM->html('fuel_lignite_price'); ?>>
      <label for="lignite-price">Lignite price:</label>
    </td>
    <td style="width: 160px;">
      <input type="text" name="lignite_price" id="lignite-price" class="elextern-storage right" value="<?php echo LIGNITE_PRICE; ?>" data-default="<?php echo LIGNITE_PRICE; ?>">
    </td>
    
    
    <td style="width: 80px;"></td>
    
    
    <td <?php $_ITEM->html('fuel_coal_price'); ?>>
      <label for="coal-price">Coal price:</label>
    </td>
    <td style="width: 140px;">
      <input type="text" name="coal_price" id="coal-price" class="elextern-storage right" value="<?php echo COAL_PRICE; ?>" data-default="<?php echo COAL_PRICE; ?>">
    </td>
    
    
    <td style="width: 80px;"></td>
    
    
    <td class="basic-only" <?php $_ITEM->html('explicit_nuclear_fuel_price'); ?>>
      <label for="explicit-nuclear-fuel-price">Nuclear fuel price:</label>
    </td>
    <td style="width: 120px;" class="basic-only">
      <input type="text" name="explicit_nuclear_fuel_price" id="explicit-nuclear-fuel-price" class="elextern-storage right" value="<?php echo EXPLICIT_NUCLEAR_FUEL_PRICE; ?>" data-default="<?php echo EXPLICIT_NUCLEAR_FUEL_PRICE; ?>">
    </td>
    
    
    <td class="ajax-implicit advanced-only">
      <div id="ajax-implicit-nuclear-fuel-price" class="advanced-only"></div>
    </td>
    
    
  </tr>
  
  
  
  
  
  <tr>
    
    <td <?php $_ITEM->html('fuel_gas_price'); ?>>
      <label for="gas-price">Gas price:</label>
    </td>
    <td>
      <input type="text" name="gas_price" id="gas-price" class="elextern-storage right" value="<?php echo GAS_PRICE; ?>" data-default="<?php echo GAS_PRICE; ?>">
    </td>
    
    
    <td style="width: 80px;"></td>
    
    
    <td <?php $_ITEM->html('fuel_oil_price'); ?>>
      <label for="oil-price">Oil price:</label>
    </td>
    <td>
      <input type="text" name="oil_price" id="oil-price" class="elextern-storage right" value="<?php echo OIL_PRICE; ?>" data-default="<?php echo OIL_PRICE; ?>">
    </td>

    
  </tr>
  
  
  
</table>
  


