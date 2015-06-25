<div class="center">

  <div class="btn-group">
  <?php foreach($data->tech_all as $i => $energy){ ?>
    <span class="energy-item btn btn-xs <?php if($energy->isDisabled()){ echo 'btn-danger'; }else{ echo 'btn-success'; } ?> <?php echo $energy->cssClass(); ?>" data-energy="<?php echo $energy->cssName(); ?>">
      <?php echo $energy->technology; ?>
    </span>
  <?php } ?>
  </div>


  <br />
    
    

  <a href="#" class="btn btn-primary" onclick="$('.energy-item.btn-danger').trigger('click');">
    Enable all
  </a>
  

  
  <br />
  
  
  
  <a href="#" class="btn btn-xs btn-info" onclick="$('.energy-item').trigger('click'); elextern_chart(); ajax_table();">
    Invert selection
  </a>

  
  
  <div class="btn-group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Technology type... <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#" onclick="$('.energy-item.fossil.btn-danger, .energy-item.no-fossil.btn-success').trigger('click');">Fossil fuels technologies only</a></li>
      <li><a href="#" onclick="$('.energy-item.fossil.btn-success, .energy-item.no-fossil.btn-danger').trigger('click');">Renewables technologies only</a></li>
    </ul>
  </div>


  
</div>