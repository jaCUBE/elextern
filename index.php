<?php

require 'bootstrap.php';

require 'template/html_header.php';
require 'template/header.php';

?>


<?php $tech_list = new TechList(); ?>



<?php if($_EX->isLogged()){ ?>

  <div id="chart">
    <?php require 'views/chart/chart.php'; ?>
  </div>

<?php }else{ ?>

  <div id="demo">
    <?php require 'views/demo.php'; ?>
  </div>

<?php } ?>








<?php


require 'template/footer.php';
require 'template/html_footer.php';

?>