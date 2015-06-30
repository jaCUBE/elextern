<tr class="decomissioning-actual child-longterm">
  <td class="attribute" <?php $_ITEM->html('impact_longterm_co2'); ?>><i class="fa fa-level-up"></i> CO2eq emissions</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('co2Emission', true); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="decomissioning-actual child-longterm">
  <td class="attribute" <?php $_ITEM->html('impact_longterm_nuclear_waste'); ?>><i class="fa fa-level-up"></i> Nuclear Wastes Treatment</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongtermNuclearWasteTreatment', true); ?>
  </td>
  <?php } ?>
</tr>