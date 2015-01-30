<tr class="impact-longterm parent" id="longterm" data-placement="bottom" data-original-title="Longterm Impact" data-content="Global climate change (high momentum) and nuclear waste storage (very-long timescales involved) are here considered to impact future generations in the long-term">
  <td class="attribute">
    Long-term Impact
  </td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongterm', true); ?>
    <?php echo $this->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="co2-emission child child-longterm" data-placement="bottom" data-original-title="CO2eq emissions" data-content="Average CO2 emissions per MWh due to fossil fuel burning and construction works">
  <td class="attribute"><i class="fa fa-level-up"></i> CO2eq emissions</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongtermCO2', true); ?>
  </td>
  <?php } ?>
</tr> 



<tr class="nuclear-waster child child-longterm" data-placement="bottom" data-original-title="Nuclear Wastes Treatment" data-content="in % of fuel pre-treatment per year. Indeed post treatment of nuclear wastes will require day-to-day cares similar to initial fuel processing for more than centuries.">
  <td class="attribute"><i class="fa fa-level-up"></i> Nuclear Wastes Treatment</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactLongtermNuclearWasteTreatment', true); ?>
  </td>
  <?php } ?>
</tr> 