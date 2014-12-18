<td style="vertical-align: top;">
  <strong>Select another input:</strong><br />
  <div style="visibility: hidden; height: 7px;"></div>
  <select name="input_visible" id="another-input-select" class="jquery-chosen">

    <optgroup label="Environmental Impact">
      <option value=".env-compensation">Compensations for Expulsions</option>
    </optgroup>

    <optgroup label="Social Impact">
      <option value=".soc-sick-leave">Sick Leaves</option>
      <option value=".soc-respiratory">Respiratory Diseases</option>
      <option value=".soc-cancer">Cancer</option>
      <option value=".soc-mortality">Mortality</option>
    </optgroup>

    <optgroup label="Longterm Impact">
      <option value=".lt-nuclear-waste-treatment">Nuclear Wastes Treatment</option>
      <option value=".lt-climate-start">Climate Change Start</option>
      <option value=".lt-climate-cost">Climate Change Cost</option>
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
    <strong>Compensation not-planned evacuation:</strong><br />
    <input type="text" name="env_compensation" id="env-compensation" value="<?php echo ENV_COMPENSATION; ?>">
  </div>
  
  
  
  
  
  <div class="another-input soc-sick-leave">
    <strong>Lost working days on sickleaves:</strong><br />
    <input type="text" name="soc_sick_leave" id="soc-sick-leave" value="<?php echo SOC_SICK_LEAVE; ?>">
  </div>
  
  <div class="another-input soc-respiratory">
    <strong>Respiratory diseases due to air pollution:</strong><br />
    <input type="text" name="soc_respiratory" id="soc-respiratory" value="<?php echo SOC_RESPIRATORY; ?>">
  </div>
  
  <div class="another-input soc-cancer">
    <strong>Cancers due to irradiation:</strong><br />
    <input type="text" name="soc_cancer" id="soc-cancer" value="<?php echo SOC_CANCER; ?>">
  </div>
  
  <div class="another-input soc-mortality">
    <strong>Average deaths:</strong><br />
    <input type="text" name="soc_mortality" id="soc-mortality" value="<?php echo SOC_MORTALITY; ?>">
  </div>
  
  
  
  
  
  
  <div class="another-input lt-nuclear-waste-treatment">
    <strong>Nuclear Wastes Treatment Pre- and Post-Treatment:</strong><br />
    <input type="text" name="lt_nuclear_waste_treatment" id="lt-nuclear-waste-treatment" value="<?php echo LT_NUCLEAR_WASTE_TREATMENT*100; ?>">
  </div>
  
  <div class="another-input lt-climate-start">
    <strong>Expecting of climate changing our lifes:</strong><br />
    <input type="text" name="lt_climate_start" id="lt-climate-start" value="<?php echo LT_CLIMATE_START; ?>">
  </div>
  
  <div class="another-input lt-climate-cost">
    <strong>Day-to-day climate adaptation in %GDP:</strong><br />
    <input type="text" name="lt_climate_cost" id="lt-climate-cost" value="<?php echo LT_CLIMATE_COST; ?>">
  </div>
  
  
  
  
  
  
  <div class="another-input oil-price">
    <strong>Oil price:</strong><br />
    <input type="text" name="oil_price" id="oil-price" value="<?php echo OIL_PRICE; ?>">
  </div>
  
  <div class="another-input gas-price">
    <strong>Gas price:</strong><br />
    <input type="text" name="gas_price" id="gas-price" value="<?php echo GAS_PRICE; ?>">
  </div>
  
  <div class="another-input coal-price">
    <strong>Coal price:</strong><br />
    <input type="text" name="coal_price" id="coal-price" value="<?php echo COAL_PRICE; ?>">
  </div>
  
  <div class="another-input lignite-price">
    <strong>Lignite price:</strong><br />
    <input type="text" name="lignite_price" id="lignite-price" value="<?php echo LIGNITE_PRICE; ?>">
  </div>
  
</td>