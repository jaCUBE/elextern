<tr class="load-factor">
  <td class="attribute" <?php $_ITEM->html('load_factor'); ?>>Load Factor</td>  
  <?php foreach($data->tech as $tech){ ?>
    <td class="center"><?php echo $tech->load_factor * 100; ?>&nbsp;%</td>
  <?php } ?>
</tr>