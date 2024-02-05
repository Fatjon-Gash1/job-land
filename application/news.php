<?php
include('database.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body style="background-color: rgba(43, 125, 196, 0.5);">
    <?php
    include('header.php');
    ?>
    <div class="job-nav"></div>
    <div>
    <header style="text-align: center; margin-top: 8em;">
        <h1 style="padding-bottom: 7px; color: white; border-bottom: 3px solid rgb(43, 125, 196); text-shadow: #000000 0 0 12px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Latest News</h1>
    </header>

    <nav class="news-nav">
        <input type="search" name="search" id="news-search">

        <ul id="ul-news">

            <li><a href="#section1">test</a></li>
            <li><a href="#section1">test2</a></li>
            <li><a href="#section1">test3</a></li>
            <li><a href="#section1">Innovation</a></li>
            <li><a href="#section2">Technology</a></li>
            <li><a href="#section3">New Companies</a></li>
        </ul>
    </nav>

    <main class="news-main">
        <section id="section1">
            <h2>Innovation</h2>
            <article>
                <h3>Headline 1</h3>
                <p>This is the content of the news article related to Innovation.</p>
            </article>
            <article>
                <h3>Headline 2</h3>
                <p>Other inovative news article go here.</p>
            </article>
        </section>

        <section id="section2">
            <h2>Technology</h2>
            <article>
                <h3>Tech News 1</h3>
                <p>Details about the latest technology developments.</p>
            </article>
            <article>
                <h3>Tech Update 2</h3>
                <p>More tech-related news and updates.</p>
            </article>
        </section>

        <section id="section3">
            <h2>New Companies</h2>
            <article>
                <h3>Everything anout new companies</h3>
                <p>Learn about new potential companies.</p>
            </article>
            <article>
                <h3>Company Reviews</h3>
                <p>See what people are saying about these companies.</p>
            </article>
        </section>
    </main>
    </div>
</body>
<?php
include('footer.php');
?>
</html>