<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Hampshire Union Accountability Advocates (NHUAA)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Maven+Pro&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>
<body>
    <!-- Header -->
    <header>
        <?php include 'components/header.php'; ?>
    </header>
        <!-- Hero Section -->
        <div class="hero" id="hero">
            <div class="px-4 py-5 mt-5 text-center hero-img">
                <div class="hero-overlay">
                    <h1 class="display-5 fw-bold text-body-emphasis hero-title">New Hampshire Union Accountability Advocates</h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4 hero-content">Promoting transparency, accountability, and democratic principles within union leadership.</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" class="btn btn-primary custom-button btn-lg px-4 gap-3">Join NHUAA</button>
                            <button type="button" class="btn btn-outline-light btn-lg px-4">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 text-center">
            <h2 class="text-body-emphasis">Who We Are</h2>
            <p class="col-lg-8 mx-auto lead text-center">
                New Hampshire Union Accountability Advocates (NHUAA) was established to promote transparency, accountability, and democratic principles within union leadership. Our mission is to inform union members about elections, provide a platform for raising issues, and offer support to members.
            </p>
            <a href="pages/about.php" class="btn btn-primary btn-lg custom-button">Learn More</a>
        </div>
        <div class="container py-5">
            <h2 class="text-body-emphasis text-center">Our Focus</h2>
            <p class="col-lg-8 mx-auto lead text-center">
                As we begin to establish ourselves with the local unions and their members in New Hampshire, our focus is on providing essential services to members across the state. We aim to support union members by ensuring fair practices, offering educational resources, and advocating for transparency and accountability.
            </p>
        </div>
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card text-white text-center" style="width: 25rem;">
                        <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <img src="./assets/images/election_monitor.jpeg" class="card-img" alt="ballot box" style="height: 200px; object-fit: cover;">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Election Monitoring</h5>
                            <p class="card-text">Ensuring fair and transparent union elections to uphold democratic principles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-4">
                    <div class="card text-white text-center" style="width: 25rem;">
                        <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <img src="./assets/images/advocacy.jpeg" class="card-img" alt="rally" style="height: 200px; object-fit: cover;">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Advocacy Campaigns</h5>
                            <p class="card-text">Launching campaigns to promote accountability and fair representation within unions.</p>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card text-white text-center" style="width: 25rem; margin-top: 20px;">
                        <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <img src="./assets/images/workshop.jpeg" class="card-img" alt="workshop" style="height: 200px; object-fit: cover;">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Educational Workshops</h5>
                            <p class="card-text">Providing resources and workshops to educate members about their rights and leadership transparency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        
        <div class="contact py-4">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-4">Contact Us</h2>
                    <p class="lead mb-4">Have questions or want to get involved? Reach out to us today!</p>
                    <div class="contact-link">
                        <a href="pages/contact.php" class="btn btn-primary btn-lg custom-button">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>

    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
