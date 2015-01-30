<table id="header">
  
  
  
  <tr>
    
    
    
    <td>
      <div id="logo">
        <a href="<?php echo URL; ?>">
          <img src="<?php echo URL; ?>/images/logo.png" alt="" title="ELEXTERN Beta" />
        </a>
      </div>
    </td>
    
    
    
    
    <td>
      <ul class="nav nav-pills">

        <li role="presentation" class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'index.php') echo 'active'; ?>">
          <a href="index.php"><i class="fa fa-bar-chart-o"></i> Chart</a>
        </li>


        <li role="presentation" class="dropdown <?php if(basename($_SERVER["SCRIPT_NAME"]) == 'table.php') echo 'active'; ?>">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa fa-table"></i> Tables <span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu">
            <li class="<?php if(@$_GET['type'] == 'social') echo 'active'; ?>">
              <a href="table.php?type=social"><i class="fa fa-users"></i> Socio-economic View</a>
            </li>
            <li class="<?php if(@$_GET['type'] == 'technical') echo 'active'; ?>">
              <a href="table.php?type=technical"><i class="fa fa-gears"></i> Techno-economic Data</a>
            </li>
          </ul>
        </li>



        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'source.php') echo 'active'; ?>">
          <a href="source.php"><i class="fa fa-file-text-o"></i> Sources</a>
        </li>



        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'comment.php') echo 'active'; ?>">
          <a href="comment.php"><i class="fa fa-comments-o"></i> Comments <span class="badge"><?php echo $_EX->countComment(); ?></span></a>
        </li>


        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'contact.php') echo 'active'; ?>">
          <a href="contact.php"><i class="fa fa-envelope-o"></i> Contact</a>
        </li>
        

  
      </ul>
    </td>
    
    
  </tr>
  
  
</table>










<!--






<div id="header">



  

    <div class="navbar-header">
      <a class="navbar-brand" href="#">ELEXTERN</a>
    </div>


   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
        
        <?php if($_EX->isLogged()){ ?>
          <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'index.php') echo 'active'; ?>">
            <a href="index.php"><i class="fa fa-bar-chart-o"></i> Chart</a>
          </li>


          <li class="dropdown <?php if(basename($_SERVER["SCRIPT_NAME"]) == 'table.php') echo 'active'; ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-table"></i> Tables <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="table.php?type=social"><i class="fa fa-users"></i> Socio-economic View</a></li>
              <li><a href="table.php?type=technical"><i class="fa fa-gears"></i> Techno-economic Data</a></li>
            </ul>
          </li>

          
          <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'source.php') echo 'active'; ?>">
            <a href="source.php"><i class="fa fa-file-text-o"></i> Sources</a>
          </li>

          
          <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'comment.php') echo 'active'; ?>">
            <a href="comment.php"><i class="fa fa-comments-o"></i> Comments <span class="badge"><?php echo $_EX->countComment(); ?></span></a>
          </li>
        <?php } ?>
        
          
          
        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'contact.php') echo 'active'; ?>">
          <a href="contact.php"><i class="fa fa-envelope-o"></i> Contact</a>
        </li>
        

        
        
      </ul>

      <?php if($_EX->isLogged()){ ?>
      <ul class="nav navbar-nav navbar-right">
        <li style="padding-top: 7px;">
         
          <div onclick="logout();" class="btn btn-danger btn-xs">
            <i class="fa fa-key"></i> Logout <?php echo $_COOKIE['login']; ?>
          </div>
        </li>
      </ul>
      <?php } ?>
      
    </div>
  </div>
  
  
  
</nav>

</div> -->