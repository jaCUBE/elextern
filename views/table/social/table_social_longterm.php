<tr class="impact-longterm parent" id="longterm">
  <td class="attribute" <?php $_ITEM->html('impact_longterm'); ?>><i class="fa fa-clock-o"></i> Long-term Impact</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongterm', true); ?>
    <?php echo $this->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="co2-emission child child-longterm">
  <td class="attribute" <?php $_ITEM->html('impact_longterm_co2'); ?>><i class="fa fa-level-up"></i> CO2eq emissions</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongtermCO2', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="nuclear-waster child child-longterm">
  <td class="attribute" <?php $_ITEM->html('impact_longterm_nuclear_waste'); ?>><i class="fa fa-level-up"></i> Nuclear Wastes Treatment</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongtermNuclearWasteTreatment', true); ?>
  </td>
  <?php } ?>
</tr> 