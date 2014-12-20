<tr class="total" data-placement="left" data-original-title="Externalities Costs" data-content="Total costs of externalities (not included in the LCOE but paid by the society or impacting future generations).">
  <td class="attribute">
    Externalities Costs
  </td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactTotal', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>


<tr class="total" data-placement="left" data-original-title="Reference Costs" data-content="Total electricity costs (LCOE + Externalities).">
  <td class="attribute">
    LCOE + Externalities
  </td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('referenceCosts', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>