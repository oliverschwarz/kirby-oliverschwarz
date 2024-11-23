<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimal Tech Blog</title>
</head>
<body>

  <header class="content">
    <h1><?php echo $page->title()->html() ?></h1>
  </header>

  <main class="content">
    <article>
      <?php echo $page->text()->kirbytext(); ?>
    </article>
  </main>

</body>
</html>