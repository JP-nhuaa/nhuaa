<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHUAA News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Maven+Pro&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<body>
    <!-- Header -->
    <header>
        <?php include '../components/header.php'; ?>
    </header>

    <!-- Main Content -->
    <main>
        <section class="news">
            <div class="container">
                <h2>Latest News</h2>
                <div class="news-articles">
                    <?php
                    $newsDir = '../assets/news/';
                    $folders = array_filter(glob($newsDir . '*'), 'is_dir');
                    usort($folders, function($a, $b) {
                        return filemtime($b) - filemtime($a);
                    });

                    $latestFolder = $folders[0] ?? null;

                    if ($latestFolder) {
                        $jsonPath = $latestFolder . '/news.json';
                        if (file_exists($jsonPath)) {
                            $json = file_get_contents($jsonPath);
                            $articles = json_decode($json, true);

                            $localArticles = array_filter($articles, function($article) {
                                return $article['category'] === 'local';
                            });

                            $nationalArticles = array_filter($articles, function($article) {
                                return $article['category'] === 'national';
                            });

                            echo '<h3>New Hampshire News</h3>';
                            foreach ($localArticles as $article) {
                                echo '<article class="news-article">';
                                echo '<h3>' . htmlspecialchars($article['title']) . '</h3>';
                                echo '<p class="news-date">' . htmlspecialchars($article['date'] ?? 'Unknown') . '</p>';
                                echo '<p class="news-source">Source: ' . htmlspecialchars($article['source']) . '</p>';
                                echo '<p>' . htmlspecialchars($article['summary']) . '</p>';
                                echo '<a href="' . htmlspecialchars($article['url'] ?? '#') . '" target="blank">Read More</a>';
                                echo '</article>';
                            }

                            echo '<h3>National News</h3>';
                            foreach ($nationalArticles as $article) {
                                echo '<article class="news-article">';
                                echo '<h3>' . htmlspecialchars($article['title']) . '</h3>';
                                echo '<p class="news-date">' . htmlspecialchars($article['date'] ?? 'Unknown') . '</p>';
                                echo '<p class="news-source">Source: ' . htmlspecialchars($article['source']) . '</p>';
                                echo '<p>' . htmlspecialchars($article['summary']) . '</p>';
                                echo '<a href="' . htmlspecialchars($article['url'] ?? '#') . '" target="blank">Read More</a>';
                                echo '</article>';
                            }
                        } else {
                            echo '<p>No news articles found.</p>';
                        }
                    } else {
                        echo '<p>No news directories found.</p>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <?php include '../components/footer.php'; ?>
    </footer>

    <script src="../assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
