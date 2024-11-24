<header>
    <a href="/" class="logo">OS</a>
    <nav class="main">
        <a href="/">Home</a>
        <?php foreach ($site->children()->listed() as $item): ?>
        <?php echo $item->title()->link(); ?>
        <?php endforeach; ?>
    </nav>
</header>