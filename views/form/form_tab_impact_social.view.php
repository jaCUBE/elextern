<table>
  
  
  
  <tr>
    
    
    <td <?php $_ITEM->html('impact_social_sick_leaves'); ?>>
      <label for="soc-sick-leave">Lost working days cost:</label>
    </td>
    <td style="width: 125px;">
      <input type="text" name="soc_sick_leave" id="soc-sick-leave" class="elextern-storage right" value="<?php echo SOC_SICK_LEAVE; ?>" data-default="<?php echo SOC_SICK_LEAVE; ?>">
    </td>
    
    
    <td style="width: 50px;"></td>
    
    
    <td <?php $_ITEM->html('impact_social_cancer'); ?>>
      <label for="soc-cancer">Irradiation cost:</label>
    </td>
    <td style="width: 140px;">
      <input type="text" name="soc_cancer" id="soc-cancer" class="elextern-storage right" value="<?php echo SOC_CANCER; ?>" data-default="<?php echo SOC_CANCER; ?>">
    </td>
    
    
  </tr>
  
  
  
  
  
  <tr>
    
    <td <?php $_ITEM->html('impact_social_respiratory'); ?>>
      <label for="soc-respiratory">Air pollution cost:</label>
    </td>
    <td>
      <input type="text" name="soc_respiratory" id="soc-respiratory" class="elextern-storage right" value="<?php echo SOC_RESPIRATORY; ?>" data-default="<?php echo SOC_RESPIRATORY; ?>">
    </td>
    
    
    <td></td>
    
    
    <td <?php $_ITEM->html('impact_social_mortality'); ?>>
      <label for="soc-mortality">Value of statistical life:</label>
    </td>    
    <td>
      <input type="text" name="soc_mortality" id="soc-mortality" class="elextern-storage right" value="<?php echo SOC_MORTALITY; ?>" data-default="<?php echo SOC_MORTALITY; ?>">
    </td>
    
    
  </tr>
  
  
  
  
</table>