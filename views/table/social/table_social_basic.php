<tr class="load-factor" data-placement="bottom" data-original-title="Load Factor" data-content="">
  <td class="attribute">Load Factor</td>
  <?php foreach($main->tech as $tech){ ?>
  <td class="center"><?php echo $tech->load_factor * 100; ?>&nbsp;%</td>
  <?php } ?>
</tr>