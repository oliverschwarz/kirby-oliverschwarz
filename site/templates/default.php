<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,minimum-scale=1.0">
  <title><?= $site->title() ?></title>

  <?= css('assets/site.css') ?>

</head>
<body>

  <div class="content">

    <h1><?= $page->title() ?></h1>

    <nav>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">About</a></li>
      </ul>
    </nav>

    <article>
      <?= $page->text()->kirbytext() ?>
    </article>

    <section class="blog">
      <h2>Latest articles</h2>
      <ul>
        <li>
          <h3><a href="">Essential Links in October 2022</a></li>
          <p><time>1. Nov</time> ~ I put myself into some video editing and learned how to use Final Cut Pro X. Nowadays you don't need schools anymore.</p>
        </li>
        <li>
          <h3><a href="">From schools to trainer</a></h3>
          <p><time>18. Oct</time> ~ In the past it was important to get the right training. Now it's important to get the right teacher.</p>
        </li>
        <li>
          <h3><a href="">A new camera</a></h3>
          <p><time>12. Oct</time> ~ I started my own YouTube channel about boardgames and tabletops. The first videos were shot with my iPhone.</p>
        </li>
      </ul>
    </section>

    <h2>Where is Oliver?</h2>

    <h2>More about me</h2>

    <article>
      <?= $page->more()->kirbytext() ?>
    </article>

    <h2>Blogroll</h2>

    <?= $page->blogroll()->kirbytext() ?>

  </div>

</body>
</html>