<?php if($page->tags()->isNotEmpty()): ?>
   <span class="tagline"> / <?php echo implode(', ', array_map(function($tag) {
    return '<a href="/archive?tag=' . $tag . '">' . $tag . '</a>';
  }, $page->tags()->split())); ?></span>
<?php endif ?>