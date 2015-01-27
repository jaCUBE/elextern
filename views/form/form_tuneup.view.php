<td style="vertical-align: top;">
  <strong><i class="fa fa-gears"></i> Tune impact value:</strong><br />
  <div style="visibility: hidden; height: 7px;"></div>
  <select name="input_visible" id="another-input-select" class="jquery-chosen elextern-storage">

    <optgroup label="Long-term Impact">
      <option value=".lt-climate-cost">Climate Change Cost</option>
      <option value=".lt-climate-start">Climate Change Start</option>
      <option value=".lt-nuclear-waste-treatment">Nuclear Wastes Treatment</option>
    </optgroup>
    
    <optgroup label="Environmental Impact">
      <option value=".env-compensation">Compensations for Expulsions</option>
    </optgroup>

    <optgroup label="Social Impact">
      <option value=".soc-sick-leave">Sick Leaves</option>
      <option value=".soc-respiratory">Respiratory Diseases</option>
      <option value=".soc-cancer">Cancer</option>
      <option value=".soc-mortality">Mortality</option>
    </optgroup>

    <optgroup label="Fuel Prices">
      <option value=".oil-price">Oil</option>
      <option value=".gas-price">Gas</option>
      <option value=".coal-price">Coal</option>
      <option value=".lignite-price">Lignite</option>
    </optgroup>

  </select>
</td>


<td>
  
  
  
  <div class="another-input env-compensation">
    <strong>Unplanned evacuations compensation:</strong><br />
    <input type="text" name="env_compensation" id="env-compensation" class="elextern-storage" value="<?php echo ENV_COMPENSATION; ?>" data-default="<?php echo ENV_COMPENSATION; ?>">
  </div>
  
  
  
  
  
  <div class="another-input soc-sick-leave">
    <strong>Lost working days cost:</strong><br />
    <input type="text" name="soc_sick_leave" id="soc-sick-leave" class="elextern-storage" value="<?php echo SOC_SICK_LEAVE; ?>" data-default="<?php echo SOC_SICK_LEAVE; ?>">
  </div>
  
  <div class="another-input soc-respiratory">
    <strong>Air pollution cost:</strong><br />
    <input type="text" name="soc_respiratory" id="soc-respiratory" class="elextern-storage" value="<?php echo SOC_RESPIRATORY; ?>" data-default="<?php echo SOC_RESPIRATORY; ?>">
  </div>
  
  <div class="another-input soc-cancer">
    <strong>Irradiation cost:</strong><br />
    <input type="text" name="soc_cancer" id="soc-cancer" class="elextern-storage" value="<?php echo SOC_CANCER; ?>" data-default="<?php echo SOC_CANCER; ?>">
  </div>
  
  <div class="another-input soc-mortality">
    <strong>Value of Statistical Life:</strong><br />
    <input type="text" name="soc_mortality" id="soc-mortality" class="elextern-storage" value="<?php echo SOC_MORTALITY; ?>" data-default="<?php echo SOC_MORTALITY; ?>">
  </div>
  
  
  
  
  
  
  <div class="another-input lt-nuclear-waste-treatment">
    <strong>Post-treatment and storage cost:</strong><br />
    <input type="text" name="lt_nuclear_waste_treatment" class="elextern-storage" id="lt-nuclear-waste-treatment" value="<?php echo LT_NUCLEAR_WASTE_TREATMENT*100; ?>" data-default="<?php echo LT_NUCLEAR_WASTE_TREATMENT*100; ?>">
  </div>
  
  <div class="another-input lt-climate-start">
    <strong>Climate change effects start:</strong><br />
    <input type="text" name="lt_climate_start" id="lt-climate-start" class="elextern-storage" value="<?php echo LT_CLIMATE_START; ?>" data-default="<?php echo LT_CLIMATE_START; ?>">
  </div>
  
  <div class="another-input lt-climate-cost">
    <strong>Yearly adaptation cost:</strong><br />
    <input type="text" name="lt_climate_cost" id="lt-climate-cost" class="elextern-storage" value="<?php echo LT_CLIMATE_COST*100; ?>" data-default="<?php echo LT_CLIMATE_COST*100; ?>">
  </div>
  
  
  
  
  
  
  <div class="another-input oil-price">
    <strong>Oil price:</strong><br />
    <input type="text" name="oil_price" id="oil-price" class="elextern-storage" value="<?php echo OIL_PRICE; ?>" data-default="<?php echo OIL_PRICE; ?>">
  </div>
  
  <div class="another-input gas-price">
    <strong>Gas price:</strong><br />
    <input type="text" name="gas_price" id="gas-price" class="elextern-storage" value="<?php echo GAS_PRICE; ?>" data-default="<?php echo GAS_PRICE; ?>">
  </div>
  
  <div class="another-input coal-price">
    <strong>Coal price:</strong><br />
    <input type="text" name="coal_price" id="coal-price" class="elextern-storage" value="<?php echo COAL_PRICE; ?>" data-default="<?php echo COAL_PRICE; ?>">
  </div>
  
  <div class="another-input lignite-price">
    <strong>Lignite price:</strong><br />
    <input type="text" name="lignite_price" id="lignite-price" class="elextern-storage" value="<?php echo LIGNITE_PRICE; ?>" data-default="<?php echo LIGNITE_PRICE; ?>">
  </div>

</td>




