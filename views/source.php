<h2>
  Sources
</h2>

<ul>
  
  <?php foreach($data->source_list as $source){ ?>
  
  <li class="source">
    <div>
      <span class="name">
        <?php echo $source->name; ?>
      </span>
      
      <?php if(!empty($source->url)){ ?>
      <a href="<?php echo $source->url; ?>" target="_blank" class="btn btn-primary btn-xs">
        <i class="fa fa-globe"></i> <?php echo $source->host(); ?>
      </a>
      <?php } ?>
    </div>

    
    <div class="author">
      <?php echo $source->author; ?>
    </div>

    
    <?php if(!empty($source->magazine)){ ?>
      <div class="magazine">
        <?php echo $source->magazine; ?>
      </div>
    <?php } ?>
    
    
  </li>
  
  <?php } ?>
  
</ul>