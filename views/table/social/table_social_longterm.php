<tr class="impact-longterm parent" id="longterm" data-placement="bottom" data-original-title="Longterm Impact" data-content=" When do we expect climate change impacts to start to affect our lifes.">
  <td class="attribute">
    Long-term Impact
  </td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongterm', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="co2-emission child child-longterm" data-placement="bottom" data-original-title="CO2eq emissions" data-content="Average CO2 emissions per MWh due to fossil fuel burning and construction works">
  <td class="attribute"><i class="fa fa-level-down"></i> CO2eq emissions</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongtermCO2', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="nuclear-waster child child-longterm" data-placement="bottom" data-original-title="Nuclear Wastes Treatment" data-content="in % of fuel pre-treatment per year. Indeed post treatment of nuclear wastes will require day-to-day cares similar to initial fuel processing for more than centuries.">
  <td class="attribute"><i class="fa fa-level-down"></i> Nuclear Wastes Treatment</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongtermNuclearWasteTreatment', true); ?>
  </td>
  <?php } ?>
</tr> 