<table class="full-width table-impact" style="margin-top: 15px;">
  
  <tr>
    
    
    <td class="center">
       <label for="impact-environmental">Environmental Impact</label><br />
      <input type="checkbox" name="impact_environment" id="impact-environment" class="bootstrap-switch" value="true" <?php if(SHOW_IMPACT_ENVIRONMENT){ ?> checked <?php } ?> />
    </td>
    
    
    <td class="center">
      <label for="impact-economic">Economic Impact</label><br />
      <input type="checkbox" name="impact_economic" id="impact-economic" class="bootstrap-switch" value="true" <?php if(SHOW_IMPACT_ECONOMIC){ ?> checked <?php } ?> />
    </td>
    
    
    <td class="center">
      <label for="impact-social">Social Impact</label><br />
      <input type="checkbox" name="impact_social" id="impact-social" class="bootstrap-switch" value="true" <?php if(SHOW_IMPACT_SOCIAL){ ?> checked <?php } ?> />
    </td>
    
    
    <td class="center">
      <label for="impact-longterm">Long-term Impact</label><br />
      <input type="checkbox" name="impact_longterm" id="impact-longterm" class="bootstrap-switch" value="true" <?php if(SHOW_IMPACT_LONGTERM){ ?> checked <?php } ?> />
    </td>
    
    
  </tr>

</table>


<div style="display: none;">
  <input type="checkbox" name="show_capex" id="show-capex" value="true" checked />
  <input type="checkbox" name="show_opex" id="show-opex" value="true" checked />
  <input type="checkbox" name="show_fuel" id="show-fuel" value="true" checked />
</div>