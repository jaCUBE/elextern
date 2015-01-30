<form action="" method="post" id="elextern-form">
  <div role="tabpanel">

    <ul class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#main" data-toggle="tab" id="tab-main">Main</a></li>
      <li><a href="#impact-economic" data-toggle="tab" id="tab-economic">Economic Impact</a></li>
      <li><a href="#impact-social" data-toggle="tab" id="tab-economic">Social Impact</a></li>
      <li><a href="#impact-environment" data-toggle="tab" id="tab-economic">Environmental Impact</a></li>
      <li><a href="#impact-longterm" data-toggle="tab" id="tab-economic">Long-term Impact</a></li>
      <li><a href="#fuel" data-toggle="tab" id="tab-economic">Fuel</a></li>
      <li><a href="#technology" data-toggle="tab" id="tab-economic">Technologies</a></li>
      <li><a href="#misc" data-toggle="tab" id="tab-economic">Miscellaneous</a></li>
    </ul>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="main"><?php $this->view('form_tab_main', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-economic"><?php $this->view('form_tab_impact_economic', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-social"><?php $this->view('form_tab_impact_social', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-environment"><?php $this->view('form_tab_impact_environment', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="impact-longterm"><?php $this->view('form_tab_impact_longterm', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="fuel"><?php $this->view('form_tab_fuel', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="technology"><?php $this->view('form_tab_technology', $data); ?></div>
      <div role="tabpanel" class="tab-pane" id="misc"><?php $this->view('form_tab_misc', $data); ?></div>
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

<div id="ajax-co2">
</div>