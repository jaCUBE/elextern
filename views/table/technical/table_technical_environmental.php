<tr class="extended-land-use child-environmental">
  <td class="attribute" <?php $_ITEM->html('impact_environment_extended_land_use'); ?>><i class="fa fa-level-up"></i> Extended Land Use (per MWh)</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('extendedLandUse', true); ?>
    <?php echo $this->htmlUnit('m<sup>2</sup> &times; year'); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="extended-land-use child-environmental">
  <td class="attribute" <?php $_ITEM->html('impact_environment_expulsion'); ?>><i class="fa fa-level-up"></i> Compensations for Expulsions (per MWh)</td>
  <?php foreach($data->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('displacedPeople', true); ?>
    <?php echo $this->htmlUnit('people'); ?>
  </td>
  <?php } ?>
</tr>