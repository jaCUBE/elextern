<tr class="decomissioning-actual child-longterm">
  <td class="attribute"><i class="fa fa-level-down"></i> Nuclear Wastes Treatment</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongtermNuclearWaste', true); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="decomissioning-actual child-longterm">
  <td class="attribute"><i class="fa fa-level-down"></i> CO2eq emissions</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('co2Emission', true); ?>
  </td>
  <?php } ?>
</tr> 
