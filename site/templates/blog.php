<?php snippet('meta'); ?>

  <header class="content">
    <h1><?php echo $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </header>

  <main class="content page-article-list">

<?php foreach($page->children()->listed()->flip() as $article): ?>

    <article class="h-entry">
      <h2 class="e-content p-name"><a href="<?php echo $article->url(); ?>" class="u-url"><?php echo $article->title()->html(); ?></a></h2>
      <p>
        <time datetime="<?php echo $article->date()->toDate('c'); ?>" pubdate><?php echo $article->date()->toDate('d.m.y'); ?></time> &ndash;
        <?php echo $article->text()->excerpt(100); ?> &rarr; <a href="<?php echo $article->url(); ?>">read on!</a>
      </p>
    </article>

<?php endforeach ?>

  </main>

<?php snippet('footer'); ?>