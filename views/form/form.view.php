<div class="row top-menu">
  
  
  
  <div class="col-md-6">
    <?php if(!ADVANCED){ // If advaned mode is not on... ?>
      <span class="btn btn-xs btn-primary" onclick="set_advanced_cookie('true');" <?php $_ITEM->html('btn_advanced'); ?>>
        <i class="fa fa-cubes"></i> <span class="text">Switch to advanced mode</span>
      </span>
    <?php }else{ // ...button visible in advanced mode... ?>
    <span class="btn btn-xs btn-primary" onclick="set_advanced_cookie('false');" <?php $_ITEM->html('btn_basic'); ?>>
        <i class="fa fa-cube"></i> <span class="text">Switch to basic mode</span>
      </span>
    <?php } ?>
    
      
    <span class="btn btn-xs btn-default" onclick="form_default_value();" <?php $_ITEM->html('btn_default_value'); ?>">
      <i class="fa fa-undo"></i> Default
    </span> 
  </div>
  
  
  
  <div class="col-md-6 right">
    <?php if($this->isLoggedAdmin()){ ?>
      <a href="https://docs.google.com/spreadsheet/ccc?key=0AkPtLOpX596HdHhYeW5ieVNwOHF0U3I2WVVnc2hKVGc&usp=sharing_eil#gid=6" target="_blank" class="btn btn-default btn-xs" <?php $_ITEM->html('btn_gdrive'); ?>>
        <i class="fa fa-google"></i> ELEXTERN GDrive
      </a>
    <?php } ?>
    
    <span class="btn btn-xs btn-primary" onclick="logout();" <?php $_ITEM->html('btn_logout'); ?>>
      <i class="fa fa-sign-out"></i> Logout <?php echo $this->logged->email; ?>
    </span>
  </div>
  
  
</div>











<form action="" method="post" id="elextern-form">
  
  <input type="hidden" name="mode" id="mode" value="<?php if(ADVANCED){ echo 'advanced'; }else{ echo 'basic'; } ?>" />
  
  <div role="tabpanel">

    <ul class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#main" data-toggle="tab" id="tab-main" <?php $_ITEM->html('tab_main'); ?>><i class="fa fa-sliders"></i> Main</a></li>
      <li><a href="#impact-social" data-toggle="tab" id="tab-economic" <?php $_ITEM->html('impact_social'); ?>> <i class="fa fa-users"></i> Social Impact</a></li>
      <li><a href="#impact-environment" data-toggle="tab" id="tab-economic" <?php $_ITEM->html('impact_environment'); ?>><i class="fa fa-tree"></i> Environmental Impact</a></li>
      <li><a href="#impact-longterm" data-toggle="tab" id="tab-economic" <?php $_ITEM->html('impact_longterm'); ?>><i class="fa fa-clock-o"></i> Long-term Impact</a></li>
      <li><a href="#fuel" data-toggle="tab" id="tab-economic" <?php $_ITEM->html('fuel'); ?>><i class="fa fa-fire"></i> Fuel</a></li>
      <li><a href="#technology" data-toggle="tab" id="tab-technology" <?php $_ITEM->html('tab_technology'); ?>><i class="fa fa-filter"></i> Technologies</a></li>
    </ul>

    
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="main"><?php $this->view('form_tab_main', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-social"><?php $this->view('form_tab_impact_social', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-environment"><?php $this->view('form_tab_impact_environment', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-longterm"><?php $this->view('form_tab_impact_longterm', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="fuel"><?php $this->view('form_tab_fuel', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="technology"><?php $this->view('form_tab_technology', $data); ?></div>
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