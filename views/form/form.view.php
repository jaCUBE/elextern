<div class="right top-menu"> 
  
  
  <?php if(!ADVANCED){ // If advaned mode is not on... ?>
    <span class="btn btn-xs  btn-primary" onclick="set_advanced_cookie('true');">
      Switch to advanced mode
    </span>
  <?php }else{ // ...button visible in advanced mode... ?>
    <span class="btn btn-xs btn-primary" onclick="set_advanced_cookie('false');">
      Switch to basic mode
    </span>
  <?php } ?>
  
  
  <span class="btn btn-xs btn-info" onclick="form_default_value();">
    <i class="fa fa-undo"></i> Default values
  </span>
  
  
  <span class="btn btn-xs btn-danger" onclick="logout();">
    <i class="fa fa-sign-out"></i> Logout <?php echo $this->logged->email; ?>
  </span>
  
  
</div>




<form action="" method="post" id="elextern-form">
  
  <input type="hidden" name="mode" id="mode" value="<?php if(ADVANCED){ echo 'advanced'; }else{ echo 'basic'; } ?>" />
  
  <div role="tabpanel">

    <ul class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#main" data-toggle="tab" id="tab-main">Main</a></li>
      <li><a href="#impact-social" data-toggle="tab" id="tab-economic">Social Impact</a></li>
      <li><a href="#impact-environment" data-toggle="tab" id="tab-economic">Environmental Impact</a></li>
      <li><a href="#impact-longterm" data-toggle="tab" id="tab-economic">Long-term Impact</a></li>
      <li><a href="#fuel" data-toggle="tab" id="tab-economic">Fuel</a></li>
      <?php if(ADVANCED){ // If advaned mode is not on... ?>
        <li><a href="#technology" data-toggle="tab" id="tab-economic">Technologies</a></li>
        <li><a href="#advanced" data-toggle="tab" id="tab-advanced">Advanced</a></li>
      <?php } ?>
    </ul>

    
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="main"><?php $this->view('form_tab_main', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-social"><?php $this->view('form_tab_impact_social', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-environment"><?php $this->view('form_tab_impact_environment', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-longterm"><?php $this->view('form_tab_impact_longterm', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="fuel"><?php $this->view('form_tab_fuel', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="technology"><?php $this->view('form_tab_technology', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="advanced"><?php $this->view('form_tab_advanced', $data); ?></div>
    </div>

  </div>
  
  
  
  
  
  <div style="display: none;">
    <input type="checkbox" name="impact_environment" class="elextern-storage" id="show-impact-environment" value="true" checked="checked" />
    <input type="checkbox" name="impact_economic" class="elextern-storage" id="show-impact-economic" value="true" checked="checked" />
    <input type="checkbox" name="impact_social" class="elextern-storage" id="show-impact-social" value="true" checked="checked" />
    <input type="checkbox" name="impact_longterm" class="elextern-storage" id="show-impact-longterm" value="true" checked="checked" />

    <input type="checkbox" name="show_capex" class="elextern-storage" id="show-capex" value="true" checked="checked" />
    <input type="checkbox" name="show_opex" class="elextern-storage" id="show-opex" value="true" checked="checked" />
    <input type="checkbox" name="show_fuel" class="elextern-storage" id="show-fuel" value="true" checked="checked" />
  </div>
  
  
  
  
  
  <?php if(!empty($_GET['type'])){ ?>
    <input type="hidden" name="table_type" value="<?php echo $_GET['type']; ?>" />
  <?php } ?>
</form>



<?php if(ADVANCED){ // AJAX implicit prices for advanced mode only...  ?>
  <div id="ajax-implicit-price">
  </div>
<?php } ?>