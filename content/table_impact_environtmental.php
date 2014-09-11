<tr class="impact-environtmental parent" id="environtmental" data-placement="left" data-original-title="Environtmental Impact" data-content="Computes the ecological footprint of technologies based on Life cycle assessment: land lost for mining and installing facilities, no man's land from nuclear incidents, and all related expulsions. Value of the inhabitable land depends on the discount rate. Since there is no economy without Earth, GDP can be considered as the 'return on investments' from the Earth capital, i.e. the fraction (discount rate) of its value.">
  <td class="attribute">
    Environmental Impacts
    <?php echo $_EX->htmlUnit('Click to expand'); ?>
  </td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('impactEnvirontmental', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="conflict-of-use child child-environtmental" data-placement="left" data-original-title="Conflict of Use" data-content="Extended land use for the installations and upstream activities (mining) leading to loss of biodiversity and the free services offered by nature.">
  <td class="attribute">Conflict of Use</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('conflictOfUse', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr>

<tr class="displaced-people-compensation child child-environtmental" data-placement="left" data-original-title="Unexpected Displaced People" data-content="In case of not-planned evacuation (nuclear incident) compensations are due to expelled people for their new accomodation.">
  <td class="attribute">Compensation for Unexpected Displaced People</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="right">
    <?php echo $tech->makeHtml('displacedPeopleCompensation', true); ?>
    <?php echo $_EX->htmlUnit('EUR/MWh'); ?>
  </td>
  <?php } ?>
</tr> 