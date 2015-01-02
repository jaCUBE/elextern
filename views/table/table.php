<?php 

$main = new TechList();

?>


<table id="table-sources">
  <?php echo $main->htmlTableHeader(); ?>
  
  <tbody>
    
    
    
    
    
    
    <?php
    
    if($_POST['table_type'] == 'social'){
      require 'social/table_social.php';
    }
    
    
    
    if($_POST['table_type'] == 'technical'){
      require 'technical/table_technical.php';
    }
    
    
    
    ?>
    
    
    
    
    
    
   
    
    
    
  </tbody>
  
</table>