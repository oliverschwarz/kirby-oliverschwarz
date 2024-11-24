<?php snippet('header'); ?>

<div class="container">

<?php snippet('navigation'); ?>

<main class="archive">
<?php
    $articles = page('articles')->children()->listed()->sortBy('date', 'desc');

    if($tag = get('tag')) {

        $articles = $articles->filterBy('tags', '*=', $tag);  // Changed this line
    }

    $articles = $articles->paginate(10);
    $pagination = $articles->pagination();
    ?>

    <h1>Articles<?php if($tag): ?> tagged <?= html($tag) ?><?php endif ?></h1>

    <div class="archive-list">
        <?php foreach($articles as $article): ?>
        <article>
            <h2><a href="<?= $article->url() ?>"><?= $article->title() ?></a></h2>
            <time datetime="<?= $article->date()->toDate('c') ?>" class="date" pubdate><?= $article->date()->toDate('F d, Y') ?></time>
            <?php snippet('tagline', ['page' => $article]) ?>
            <p><?= $article->text()->excerpt(150) ?></p>
        </article>
        <?php endforeach ?>
    </div>

    <?php if($pagination->hasPages()): ?>
    <nav class="pagination">
    <span>Pages: </span>
    <?php for($i = 1; $i <= $pagination->pages(); $i++): ?>
        <?php if($i > 1): ?>, <?php endif ?>
        <a <?= $pagination->page() === $i ? 'class="active"' : '' ?> href="<?= $pagination->pageUrl($i) ?>"><?= $i ?></a>
    <?php endfor ?>
    </nav>
    <?php endif ?>

</main>

</div><!-- /container -->

<?php snippet('footer') ?>