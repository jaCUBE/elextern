<?php

require 'bootstrap.php';

require 'template/html_header.php';
require 'template/header.php';

?>


<?php $tech_list = new TechManager(); ?>


  <div id="chart">
    <?php require 'views/login.php'; ?>
  </div>








<?php


require 'template/footer.php';
require 'template/html_footer.php';

?>