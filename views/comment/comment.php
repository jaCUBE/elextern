<div class="row">
  
  
  
  
  <div class="col-md-7">
    <h2>
      Comments
    </h2>
    
    <?php foreach($data->comment_list as $comment){ ?>
    <div class="comment">
      <div class="meta">
        <strong><?php echo $comment->author_name; ?></strong> | <?php echo $comment->added; ?>
      </div>
      <div class="text">
        <?php echo $comment->comment_text; ?>
      </div>
    </div>
    <?php } ?>
  </div>
  
  
  
  <div class="col-md-5">
    <h2>
      Add Comment
    </h2>
    
    <form action="" method="post">
      <label for="author-name">Your name:</label>
      <input type="text" id="author-name" name="author_name" class="form-control" placeholder="i.e.: John Smith" />
      
      <label for="author-email">Your e-mail (won't be displayed):</label>
      <input type="text" id="author-email" name="author_email" class="form-control" placeholder="i.e.:john@mysite.com" />
      
      <label for="comment-text">Comment text:</label>
      <textarea id="comment-text" name="comment_text" class="form-control" style="height: 100px;"></textarea>
      
      <br />
      
      <div class="center">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-comment"></i> Add Comment
        </button>
      </div>
    </form>
  </div>
  
  
</div>