<tr class="load-factor" data-placement="bottom" data-original-title="Load Factor" data-content="Represents the ratio of the produced electricity by its potential, were the technology be used at its nominal power during the whole year. It is lower than 100% for the following reasons:- maintenance works during which the power plant does not produce- decrease of the production to adapt to low demand- non-availability of renewable sources (absence of light or wind)">
  <td class="attribute">Load Factor</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="center"><?php echo $tech->load_factor * 100; ?>&nbsp;%</td>
  <?php } ?>
</tr>