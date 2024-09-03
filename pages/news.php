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
                    <article>
                        <h3>Local 633 Officially Nominates Candidates for Upcoming Union Election</h3>
                        <h5>By JP Dustin</h5>
                        <p class="news-date">September 2, 2024</p>

                        <p>On September 1, 2024, Teamsters Local 633 held its official nomination meeting, where members gathered to select candidates for the upcoming union election. Despite the meeting being set on Labor Day weekend, the event at Local 633 headquarters drew a solid turnout from the membership, all eager to participate in this critical democratic process.</p>

                        <p>As members settled into their seats, a striking divide became evident in the hall. On one side, supporters of the Members First Slate, clad in unified black t-shirts emblazoned with their logo, sat together in a show of solidarity. Across the room, supporters of the Power Slate, distinguished by their blue and gold shirts, occupied the opposite side. The meeting commenced with an official welcome from Jeffrey Padellaro, Secretary-Treasurer of Local 633. He addressed the members with a focus on the significance of the upcoming election, underscoring its impact on the union's future direction. Following Padellaro's remarks, Scott Gove, Recording Secretary, took the floor to carefully read the bylaws related to the election process. His detailed explanation ensured that all members were fully informed of the nomination rules, setting a tone of transparency and fairness for the proceedings.</p>

                        <p>Nominations were then opened, conducted by a member from the International Brotherhood of Teamsters. Candidates were each nominated and the nominations seconded by a member in good standing. Each candidate then accepted their nomination and had the opportunity to briefly address the members, outlining their commitment to the members of Local 633. Many of candidates expressed their commitment to strengthening the union, improving working conditions, and enhancing member services.</p>

                        <p>The Members First Slate, the incumbents, exuded a sense of unity and strength that the Power Slate struggled to match. They spoke with confidence and authority as they accepted their nominations, presenting a cohesive front by sitting together throughout the meeting. In contrast, several Power Slate candidates were challenging to hear during their acceptance speeches, and their scattered seating arrangements made it difficult to distinguish them from the general membership, highlighting a noticeable lack of cohesion.</p>

                        <p>The nominated candidates will now enter the campaign phase, where they will engage with members and share their platforms. The Power Slate began their campaign efforts back in July, but they have faced some resistance, particularly from the incumbents within the union hall. <a href="https://www.633power.org/" target="_blank">According to their website</a>, they encountered hostility from certain employers during visits, were instructed by a manager—who was directed by a business agent of the local—that they could not be on specific properties, and even met resistance in person at another site, where a significant number of the current leadership were present.</p>

                        <p>In response to the Power Slate's claims, the Members First Slate issued a letter on their <a href="https://www.facebook.com/profile.php?id=61561214596567" target="_blank">Facebook page</a>, denouncing the Power Slate and alleging they have been falsely presenting themselves as representatives of Local 633. The letter also referred to members of the Power Slate as "malcontents." As the campaign intensifies, the election itself is scheduled to take place later this year, with all members strongly encouraged to cast their votes and make their voices heard.</p>

                        <p>This election is a significant moment for Local 633, as it is the first time in years the incumbents have faced an election challenge. The outcome of this election will determine the leadership team that will guide the union through the next 3-year term. Members are urged to stay informed, participate in the upcoming events, and exercise their right to vote in the election.</p>

                        <p>Below is the official list of the nominated candidates for each slate:</p>

                        <table class="candidates-table">
                            <tr>
                                <th>Position</th>
                                <th>Members First Slate</th>
                                <th>Power Slate</th>
                            </tr>
                            <tr>
                                <td>Secretary-Treasurer</td>
                                <td>Jeffrey Padellaro</td>
                                <td>Matthew Lortie</td>
                            </tr>
                            <tr>
                                <td>President</td>
                                <td>Jeff Parkinson</td>
                                <td>James Marchand</td>
                            </tr>
                            <tr>
                                <td>Vice President</td>
                                <td>James Petrillo</td>
                                <td>Robert Stanley</td>
                            </tr>
                            <tr>
                                <td>Recording Secretary</td>
                                <td>Scott Gove</td>
                                <td>Jeffrey Moore</td>
                            </tr>
                            <tr>
                                <td>Business Agent</td>
                                <td>Richard Laughton</td>
                                <td>Anthony Dionne</td>
                            </tr>
                            <tr>
                                <td>Business Agent</td>
                                <td>Keith Judge</td>
                                <td>Tim Merrill</td>
                            </tr>
                            <tr>
                                <td>Business Agent</td>
                                <td>William Cahill, Jr.</td>
                                <td>Steven Gaines</td>
                            </tr>
                            <tr>
                                <td>Trustee</td>
                                <td>Donna LeMay</td>
                                <td>Cristian Ionescu</td>
                            </tr>
                            <tr>
                                <td>Trustee</td>
                                <td>Alyssa Croteau</td>
                                <td>Rick Montgomery</td>
                            </tr>
                            <tr>
                            <td>Trustee</td>
                                <td>Ryan Smith</td>
                                <td>Nathan Lafleur</td>
                            </tr>
                            </table>
                        
                    <!-- <?php
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
                    ?> -->
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
