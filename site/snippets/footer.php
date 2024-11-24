<footer>
  <div class="container">
    <!-- Tags section -->
    <section class="footer-tags">
      <?php
      $allTags = page('blog')->children()->listed()->pluck('tags', ',', true);
      if (!empty($allTags)): ?>
        <h3>Tags</h3>
        <?php echo implode(', ', array_map(function($tag) {
          return '<a href="/tag:' . $tag . '">' . $tag . '</a>';
        }, $allTags)); ?>
      <?php endif ?>
    </section>

    <!-- Navigation sections -->
    <div class="footer-sections">
      <section>
        <h3>Navigation</h3>
        <ul>
          <li><a href="<?= $site->url() ?>">Home</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Now</a></li>
          <li><a href="">About</a></li>
        </ul>
      </section>

      <section>
        <h3>Pages</h3>
        <ul>
          <li><a href="">Imprint</a></li>
          <li><a href="">Privacy Policy</a></li>
          <li><a href="">Terms of Use</a></li>
        </ul>
      </section>
    </div>
  </div>
</footer>