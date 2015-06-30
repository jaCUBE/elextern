<tr class="impact-environmental parent" id="environmental">
  <td class="attribute" <?php $_ITEM->html('impact_environment'); ?>><i class="fa fa-tree"></i> Environmental Impact</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEnvironment', true); ?>
    <?php echo $this->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="conflict-of-use child child-environmental">
  <td class="attribute" <?php $_ITEM->html('impact_environment_conflict_of_use'); ?>><i class="fa fa-level-up"></i> Conflict of Use</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEnvironmentLandUse', true); ?>
  </td>
  <?php } ?>
</tr>

<tr class="displaced-people-compensation child child-environmental">
  <td class="attribute" <?php $_ITEM->html('impact_environment_expulsion'); ?>><i class="fa fa-level-up"></i> Compensation for Expulsion</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEnvironmentDisplacedPeople', true); ?>
  </td>
  <?php } ?>
</tr> 