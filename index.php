<?php

require 'bootstrap.php';

require 'template/html_header.php';
require 'template/header.php';

?>

<div id="chart">
  <?php $tech_list = new TechList(); ?>
  
  <?php require 'views/chart/chart.php'; ?>
  
</div>









<?php


require 'template/footer.php';
require 'template/html_footer.php';

?>