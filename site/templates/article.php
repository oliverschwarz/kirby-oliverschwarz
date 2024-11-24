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
        </article>

    </main>

</div>

<?php snippet('footer'); ?>