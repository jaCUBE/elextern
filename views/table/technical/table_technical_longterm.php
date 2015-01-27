<tr class="decomissioning-actual child-longterm">
  <td class="attribute"><i class="fa fa-level-up"></i> Nuclear Wastes Treatment</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongtermNuclearWasteTreatment', true); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="decomissioning-actual child-longterm">
  <td class="attribute"><i class="fa fa-level-up"></i> CO2eq emissions</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('co2Emission', true); ?>
  </td>
  <?php } ?>
</tr> 
