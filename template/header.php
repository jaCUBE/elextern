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
        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'table.php') echo 'active'; ?>"><a href="table.php"><i class="fa fa-table"></i> Table</a></li>
        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'contact.php') echo 'active'; ?>"><a href="contact.php"><i class="fa fa-envelope-o"></i> Contact</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" onclick="default_form();"><i class="fa fa-undo"></i> Default impact values</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  
  
  
</nav>

</div>