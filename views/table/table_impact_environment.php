<tr class="impact-environmental parent" id="environmental" data-placement="left" data-original-title="Environmental Impact" data-content="Computes the ecological footprint of technologies based on Life cycle assessment: land lost per year of operation for mining and installing facilities, no man's land from nuclear incidents, and all related expulsions. Since there is no economy without Earth, Every destroyed land destroyed its surface share on GDP.">
  <td class="attribute">
    Environmental Impact
    <?php echo $_EX->htmlUnit('Click to expand'); ?>
  </td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEnvironment', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="conflict-of-use child child-environmental" data-placement="left" data-original-title="Conflict of Use" data-content="Extended land use for the installations and upstream activities (mining) leading to loss of biodiversity and the free services offered by nature.">
  <td class="attribute">Conflict of Use</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEnvironmentLandUse', true); ?>
  </td>
  <?php } ?>
</tr>

<tr class="displaced-people-compensation child child-environmental" data-placement="left" data-original-title="Unexpected Displaced People" data-content="In case of not-planned evacuation (nuclear incident) compensations are due to expelled people for their new accomodation.">
  <td class="attribute">Compensation for Expulsion</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEnvironmentDisplacedPeople', true); ?>
  </td>
  <?php } ?>
</tr> 