<?php

require 'bootstrap.php';

require 'template/html_header.php';
require 'template/header.php';

?>


<div id="table">
  
  <div id="table-<?php echo $_GET['type']; ?>">

    <?php require 'views/form.php'; ?>

    <div id="table-content">

    </div>
    
  </div>


</div>






<?php


require 'template/footer.php';
require 'template/html_footer.php';

?>