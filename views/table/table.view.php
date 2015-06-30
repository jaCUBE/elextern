<table id="tech-table">
  <?php echo $data->htmlTableHeader(); ?>
  
  <tbody>

    <tr class="country" data-original-title="Country" data-content="Indicates which country are technology data.">
      <td class="attribute" <?php $_ITEM->html('country_data'); ?>>
        Data for Country
      </td>
      <?php foreach($data->tech as $tech){ ?>
      <td class="center">
        <img src="<?php echo $tech->urlFlag(); ?>" />
      </td>
      <?php } ?>
    </tr>

    
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