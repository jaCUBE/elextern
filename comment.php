<?php

require 'bootstrap.php';

require 'template/html_header.php';
require 'template/header.php';

?>


<div id="comment">

  <?php
  
  $form = new CommentForm();
  $form->insertComment();
  
  $data = new CommentList();
  $data->fetchCommentList();
  
  require 'views/comment/comment.php';
  
  ?>


</div>






<?php


require 'template/footer.php';
require 'template/html_footer.php';

?>