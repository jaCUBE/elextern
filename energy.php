<?php

require 'bootstrap.php';

require 'template/html_header.php';
require 'template/header.php';

?>


<div id="energy">

  <?php

  $data = new Selection();
  $data->fetchName();

  require 'views/energy.php';

  ?>

</div>






<?php


require 'template/footer.php';
require 'template/html_footer.php';

?>