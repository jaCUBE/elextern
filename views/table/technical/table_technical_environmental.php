<tr class="extended-land-use child-environmental">
  <td class="attribute"><i class="fa fa-level-down"></i> Extended Land Use</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('extendedLandUse', true); ?>
    <?php echo $_EX->htmlUnit('m<sup>2</sup> &times; year'); ?>
  </td>
  <?php } ?>
</tr> 




<tr class="extended-land-use child-environmental">
  <td class="attribute"><i class="fa fa-level-down"></i> Compensations for Expulsions</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('displacedPeople', true); ?>
    <?php echo $_EX->htmlUnit('people'); ?>
  </td>
  <?php } ?>
</tr>