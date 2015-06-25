<table id="header">
  
  
  
  <tr>
    
    
    
    <td>
      <div id="logo" class="left">
        <a href="<?php echo URL; ?>">
          <img src="<?php echo URL; ?>/images/logo.png?v=2015-01-30" alt="" title="ELEXTERN Beta" />
        </a>
      </div>
    </td>
    
    
    
    
    <td>
      <ul class="nav nav-pills">

        <?php if(!$_EX->isLogged()){ ?>
        
        
        
          <li role="presentation" class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'index.php') echo 'active'; ?>">
            <a href="index.php"><i class="fa fa-compass"></i> Demo</a>
          </li>
          
          
        
        <?php }else{ ?>
        
          
          
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
        
        <?php } ?>




        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'source.php') echo 'active'; ?>">
          <a href="source.php"><i class="fa fa-file-text-o"></i> Sources</a>
        </li>

        

        <?php if($_EX->isLogged()){ ?>
        
          <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'comment.php') echo 'active'; ?>">
            <a href="comment.php"><i class="fa fa-comments-o"></i> Comments <span class="badge"><?php echo $_EX->countComment(); ?></span></a>
          </li>
        
        <?php } ?>

        

        <li class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == 'contact.php') echo 'active'; ?>">
          <a href="contact.php"><i class="fa fa-envelope-o"></i> Contact</a>
        </li>

  
      </ul>
    </td>
    
    
  </tr>
  
  
</table>




<?php if($_EX->checkIe()){ ?>
<div style="background: #FFBFBF; border: 2px solid #C10300; padding: 5px;">
  It seems you have old version of Internet Explorer.
  Please, update your browser or use alternative one like <a href="https://www.mozilla.org/" target="_blank">Mozilla Firefox</a> or <a href="http://www.google.com/chrome/" target="_blank">Google Chrome</a>.
</div>
<?php } ?>
