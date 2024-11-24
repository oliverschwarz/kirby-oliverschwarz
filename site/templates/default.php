<?php snippet('header'); ?>

    <div class="container">

        <header>
            <a href="/" class="logo">OS</a>
            <nav>
                <a href="/">Home</a>
                <?php foreach ($site->children()->listed() as $item): ?>
                <?php echo $item->title()->link(); ?>
                <?php endforeach; ?>
            </nav>
        </header>

        <main>
<?php

$latest = page('articles')->children()->listed()->sortBy('date', 'desc')->first();

if ($latest): ?>
            <article>
                <h1><?= $latest->title(); ?></h1>
                <time datetime="<?= $latest->date()->toDate('c') ?>" class="date" pubdate><?= $latest->date()->toDate('F d, Y'); ?></time>
                <?php snippet('tagline', ['page' => $latest]) ?>
                <img src="http://via.placeholder.com/780x260" alt="Featured image">
                <?= $latest->text()->kirbytext(); ?>
            </article>
<?php endif; ?>

    </div><!-- /container -->

    <section class="recent-posts">

        <div class="container">  <!-- For max-width control -->
            <h2>Recent Articles</h2>
<?php foreach(page('articles')->children()->listed()->sortBy('date', 'desc')->offset(1)->limit(3) as $article): ?>
            <article>
                <h2><a href="<?= $article->url() ?>"><?= $article->title() ?></a></h2>
                <time datetime="<?= $article->date()->toDate('c') ?>" class="date" pubdate><?= $article->date()->toDate('F d, Y') ?></time>
                <?php snippet('tagline', ['page' => $article]) ?>
                <p><?= $article->text()->excerpt(150) ?></p>
            </article>
<?php endforeach ?>
        </div>
    </section>

</main>

<?php snippet('footer'); ?>