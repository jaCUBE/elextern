<?php

require 'bootstrap.php';

require 'template/html_header.php';
require 'template/header.php';

?>


<div id="source">
  
  <?php
  
  $data = new SourceManager();
  $data->fetchSourceList();
  
  require 'views/source.php'; ?>

</div>






<?php


require 'template/footer.php';
require 'template/html_footer.php';

?>