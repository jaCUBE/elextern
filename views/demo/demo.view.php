<div class="row">
  
  
  
  
  
  <div class="col-md-5">
    <?php $this->view('chart', $data); ?>
    
    <img src="<?php echo URL; ?>/images/demo_chart1.png" />
    
    <br /><br /><br />
    
    <img src="<?php echo URL; ?>/images/demo_chart2.png" />
  </div>
  
  
  
  
  
  <div class="col-md-7">
    <div class="jumbotron">      
      <p>ELEXTERN is a tool that computes the real costs of electricity making, including externalities.
        It clearly distinguishes physical impacts from social parameters that are scenario-dependent, to be chosen by the user.
        <br /><br />
        It considers electricity variable value
        (peak/low demand) and relative costs of each technology as well as following externalities:
        fossil fuel depletion, dependency to fuel or technology imports, CO<sub>2</sub> emissions, environmental footprint,
        health impact, and long-term liabilities.</p>

      <p class="right">
        <a href="#" class="btn btn-success" onclick="login();" style="margin-top: 10px;">
          I have an account, log me in
        </a>
        
        <a class="btn btn-primary btn-lg" href="login.php" role="button">Sign up for free! &raquo;</a>
      </p>
    </div>    

    
    <p>
      To reduce CO2 emissions and fossil fuel dependency, Europe is engaged to switch
      from mainly coal-based to low-carbon technologies for electricity generation.
      Though determination of the different economic, social and environmental impacts
      belongs to scientists and specialists, valuing them on a unique scale is of societal matter.
    </p>

 
    <p>
      ELEXTERN considers the different stages where economic, social and environmental expenses or
      impacts occur in the life cycle of a power plant: Construction, Operation, Decommissioning,
      and Long term consequences. A discount rate R is used to levelize these costs and impacts.
      R = 0 means a complete neutrality of time. With higher values of R, future costs and impacts
      will weigh less than present ones. Since the production/consumption of electricity is not constant,
      a Load Factor LF is used to account for the variation of use of the plant compared to its nominal
      capacity. LF is then important for the computation of Levelized Cost Of Electricity (LCOE)<sup>[1]</sup>.
    </p>
    
    
    <p>
      Economic, social and environmental impact valuation depends on how much we value our dependency
      to foreign technologies and resources, our health and life, our biodiversity and our capacity
      to manage nuclear waste storage as well as future climate change. While existing studies<sup>[2]</sup>
      partially compute these impacts, ELEXTERN shows that LCOE and impacts valuation is not unique.
      For given investment, operation and fuel costs, Load factor LF and Discount rate R can dramatically
      change the LCOE. Also, Value of Statistical Life (VSL), CO2 price and other parameters affect the
      impacts valuation. That is why it is important to let the user adjusting its own social values of
      different life events. 
    </p>
    
    <hr />

    <p style="font-size: 8pt;">
      <strong>References</strong><br />
      [1] International Energy Agency and Organisation for Economic Co-operation and Development (IEA/OECD); Projected Costs of Generating Electricity; 2010; Paris, France <a href="http://www.iea.org/publications/freepublications/publication/projected_costs.pdf" class="btn btn-xs btn-default">Web</a>
      <br /><br />
      [2] Máca V, Melichar J, Ščasný M; Internalization of External Costs of Energy Generation in Central and Eastern European Countries; Journal of Environment & Development; 21(2):181-197; June 2012 <a href="http://dx.doi.org/10.1177/1070496512442504" class="btn btn-xs btn-default">Web</a>
    </p>

  </div>
  
</div>




<div class="modal fade" id="elextern-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ELEXTERN Login</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning">
          So far, for testing purposes only. Just press <strong>Log Me In</strong> button or <a href="#" class="btn btn-xs btn-warning" onclick="login();">this button</a>. It will log you in testing account.
        </div>
        <?php require 'login_form.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
