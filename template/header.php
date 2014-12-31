<div id="header">

  <div id="logo">
    <img src="<?php echo URL; ?>/images/logo.png" />
  </div>


  

<nav class="navbar navbar-default" role="navigation" style="margin-top: 20px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ELEXTERN</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'index.php') echo 'active'; ?>"><a href="index.php"><i class="fa fa-bar-chart-o"></i> Chart</a></li>
        
        
        <li class="dropdown <?php if(basename($_SERVER["SCRIPT_NAME"]) == 'table.php') echo 'active'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-table"></i> Tables <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="table.php?type=physical"><i class="fa fa-gears"></i> Physical Data</a></li>
            <li><a href="table.php?type=economical"><i class="fa fa-money"></i> Economical Data</a></li>
          </ul>
        </li>
        
        
        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'contact.php') echo 'active'; ?>"><a href="contact.php"><i class="fa fa-envelope-o"></i> Contact</a></li>
      </ul>
      
      <div class="nav navbar-nav navbar-right">
        <a href="#" onclick="default_form();"  class="btn btn-primary"><i class="fa fa-undo"></i> Default impact values</a>
      </div>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  
  
  
</nav>

</div>