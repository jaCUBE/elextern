<table id="tech-table">
  <?php echo $data->htmlTableHeader(); ?>
  
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