<footer>
  <div class="container">
    <!-- Tags section -->
    <section class="footer-tags">
      <?php
      $allTags = page('articles')->children()->listed()->pluck('tags', ',', true);
      if (!empty($allTags)): ?>
        <h3>Tags</h3>
        <?php echo implode(', ', array_map(function($tag) {
          return '<a href="/tag:' . $tag . '">' . $tag . '</a>';
        }, $allTags)); ?>
      <?php endif ?>
    </section>

    <!-- Navigation sections -->
    <section class="footer-nav">
        <h3>Navigation</h3>
        <div class="nav-columns">
            <ul>
                <li><a href="<?= $site->url() ?>">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Now</a></li>
                <li><a href="">About</a></li>
            </ul>

            <ul>
                <li><a href="">Projects</a></li>
                <li><a href="">Photos</a></li>
                <li><a href="">Books</a></li>
            </ul>

            <ul>
                <li><a href="">Imprint</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Terms</a></li>
            </ul>
        </div>
    </section>

  </div>
</footer>