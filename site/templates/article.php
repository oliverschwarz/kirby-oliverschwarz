<?php snippet('header'); ?>

<div class="container">

<?php snippet('navigation'); ?>

    <main>

        <article>
            <h1><?=$page->title()?></h1>
            <time datetime="<?= $page->date()->toDate('c') ?>" class="date" pubdate><?= $page->date()->toDate('F d, Y'); ?></time>
            <?php snippet('tagline') ?>
            <div class="article-content">
                <?=$page->text()->kt(); ?>
            </div>

            <?php if($page->prev() || $page->next()): ?>
            <nav class="article-navigation">
                <?php if($page->prev()): ?>
                <a href="<?= $page->prev()->url() ?>" class="prev-article">
                    ← <?= $page->prev()->title() ?>
                </a>
                <?php endif ?>

                <?php if($page->next()): ?>
                <a href="<?= $page->next()->url() ?>" class="next-article">
                    <?= $page->next()->title() ?> →
                </a>
                <?php endif ?>
            </nav>
            <?php endif ?>

        </article>

    </main>

</div>

<?php snippet('footer'); ?>