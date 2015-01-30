<table>
  
  
  <tr>
    
    
    <td>
      <?php foreach($data->tech_all as $i => $energy){ ?>
        <span class="energy-item btn btn-xs <?php if($energy->isDisabled()){ echo 'btn-danger'; }else{ echo 'btn-success'; } ?> <?php echo $energy->cssClass(); ?>" data-energy="<?php echo $energy->cssName(); ?>">
          <?php echo $energy->technology; ?>
        </span>

        &nbsp;
      <?php } ?>
    </td>
    
    
    
    
    <td class="center">
      <a href="#" class="btn btn-sm btn-default" onclick="$('.energy-item.fossil.btn-danger, .energy-item.no-fossil.btn-success').trigger('click');">
        Fossil Fuels Only
      </a>

      <a href="#" class="btn btn-sm btn-default" onclick="$('.energy-item.fossil.btn-success, .energy-item.no-fossil.btn-danger').trigger('click');">
        Renewables Only
      </a>
    </td>

    
    
    <td class="center">
      <a href="#" class="btn btn-success" onclick="$('.energy-item.btn-danger').trigger('click');">
        Enable All
      </a>
      
      <a href="#" class="btn btn-xs btn-info" onclick="$('.energy-item').trigger('click'); elextern_chart(); ajax_table();">
        Invert
      </a>
    </td>
  
  
</table>

