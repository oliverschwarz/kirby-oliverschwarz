<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimal Tech Blog</title>

    <meta name="referrer" content="no-referrer">
    <link rel="canonical" href="https://oliverschwarz.info">
    <?= css('assets/css/layout.css') ?>

    <link href="https://www.linkedin.com/in/-oschwarz/" rel="me">
    <link href="http://xing.to/oschwarz" rel="me">
    <link href="https://twitter.com/oliverschwarz" rel="me">
    <link href="https://github.com/oliverschwarz" rel="me">
    <link href="https://mastodon.social/@oliverschwarz" rel="me">

</head>
<body>
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
            <article>
                <h1>Embracing Minimalism in Design and Life</h1>
                <span class="date">November 23, 2024</span>
                <img src="http://via.placeholder.com/780x260" alt="Featured image">
                <p>This design embraces modern minimalism with generous whitespace, bold typography, and a focus on readability. The layout is clean and distraction-free.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </article>

            <h2>Recent Articles</h2>

            <div class="article-preview">
                <h3><a href="/blog/rust-cli-tool">Building a Rust-powered Command Line Tool</a></h3>
                <div class="article-meta">
                    November 20, 2024 · Systems Programming
                </div>
                <p>Explore how to create efficient command-line tools using Rust's robust ecosystem and safety features. This guide covers <a href="/tutorials/rust-basics">basic Rust concepts</a> and advanced CLI patterns.</p>
            </div>

            <div class="article-preview">
                <h3><a href="/blog/css-container-queries">CSS Container Queries: The Future of Responsive Design</a></h3>
                <div class="article-meta">
                    November 15, 2024 · Web Development
                </div>
                <p>Learn how container queries are changing the way we approach component-based responsive design. See practical examples in our <a href="/demos/container-queries">interactive demo</a>.</p>
            </div>

            <div class="article-preview">
                <h3><a href="/blog/typescript-5-features">TypeScript 5.0: What's New and Exciting</a></h3>
                <div class="article-meta">
                    November 10, 2024 · JavaScript
                </div>
                <p>Exploring the latest features and improvements in TypeScript 5.0 and how they enhance developer experience. Follow our <a href="/series/typescript-essentials">TypeScript essentials series</a> for more insights.</p>
            </div>

        </main>

    </div><!-- /container -->

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/now">Now</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Topics</h4>
                <ul>
                    <li><a href="/topics/javascript">JavaScript</a></li>
                    <li><a href="/topics/rust">Rust</a></li>
                    <li><a href="/topics/web-development">Web Development</a></li>
                    <li><a href="/topics/systems">Systems</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Legal</h4>
                <ul>
                    <li><a href="/imprint">Imprint</a></li>
                    <li><a href="/privacy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>