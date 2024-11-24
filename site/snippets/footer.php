<footer>
  <div class="container">
    <!-- Tags section -->
    <section class="footer-tags">
      <?php
      $allTags = page('articles')->children()->listed()->pluck('tags', ',', true);
      sort($allTags);
      if (!empty($allTags)): ?>
        <h3>Tags</h3>
        <?php echo implode(', ', array_map(function($tag) {
          return '<a href="/archive?tag=' . $tag . '">' . $tag . '</a>';
        }, $allTags)); ?>
      <?php endif ?>
    </section>

    <!-- Navigation sections -->
    <section class="footer-nav">
        <h3>Navigation</h3>
        <div class="nav-columns">
            <ul>
                <li><a href="<?= $site->url() ?>">Home</a></li>
                <li><a href="<?= $site->url() ?>/archive">Articles</a></li>
                <li><a href="<?= $site->url() ?>/about">About</a></li>
            </ul>

            <ul>
                <li><a href="<?php echo $site->url(); ?>/feed/">RSS</a></li>
                <li><a href="<?php echo $site->url(); ?>/blogroll/">Blogroll</a></li>
                <li><a href="<?= $site->url() ?>/now">/now</a></li>
            </ul>

            <ul>
                <li><a href="<?= $site->url() ?>/legal">Legal</a></li>
                <li><a href="https://webbkoll.dataskydd.net/en/results?url=https%3A%2F%2Foliverschwarz.info%2F">Data privacy check</a></li>
            </ul>
        </div>
        <p>When I am working on this website, I always listen to <a href="https://chillhop.com">Chillhop radio</a>.</p>
    </section>

  </div>

    <section class="pageinfo">
        <div class="container">
            🍪 Cookie-free zone. Made with <a href="https://getkirby.com">Kirby</a>, <a href="https://claude.ai">Claude.ai</a> &amp; ❤️ -
            <a href="https://github.com/oliverschwarz/kirby-oliverschwarz/">Source</a>
        </div>
    </section>

</footer>