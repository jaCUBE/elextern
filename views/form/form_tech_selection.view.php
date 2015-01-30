<div class="alert alert-info">
  Select or deselect desired electricity technologies here. It will affect both, table and chart.
</div>


<?php foreach($data->tech_all as $i => $energy){ ?>
  <?php if($i % 3 == 0 OR $i == 0){ ?>
    <div class="row">
  <?php } ?>

  <div class="col-md-4">
    <div class="energy-item btn <?php if($energy->isDisabled()){ echo 'btn-danger'; }else{ echo 'btn-success'; } ?> <?php echo $energy->cssClass(); ?>" data-energy="<?php echo $energy->cssName(); ?>">
      <?php echo $energy->technology; ?>
    </div>
  </div>
    
  <?php if($i % 3 == 2 OR $i == count($tech_list->tech_all) - 1){ ?>
    </div>
  <?php } ?>
    
<?php } ?>




<hr />





<div class="center">
  
  <a href="#" class="btn btn-default" onclick="$('.energy-item.fossil.btn-danger, .energy-item.no-fossil.btn-success').trigger('click');">
    Fossil Fuels Only
  </a>
  
  <a href="#" class="btn btn-default" onclick="$('.energy-item.fossil.btn-success, .energy-item.no-fossil.btn-danger').trigger('click');">
    Renewables Only
  </a>

  <br /><br />
  
  <a href="#" class="btn btn-info" onclick="$('.energy-item').trigger('click'); elextern_chart(); ajax_table();">
    Invert
  </a>
  
  <a href="#" class="btn btn-success btn-lg" onclick="$('.energy-item.btn-danger').trigger('click');">
    Enable All
  </a>

</div>