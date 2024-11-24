<?php snippet('header'); ?>

<div class="container">

<?php snippet('navigation'); ?>

    <main>

        <article>
            <h1><?=$page->title()?></h1>
            <div class="single-page">
                <p><?=$page->text()->kt()?></p>
            </div>
        </article>

    </main>

</div>

<?php snippet('footer'); ?>