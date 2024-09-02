<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>

<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark blue-header" aria-label="Main navigation">
    <div class="container-fluid">
        <img src="../assets/images/OriginalLogoSymbol.png" height="80" width="80" alt="NHUAA Logo">
        <a class="navbar-brand title" href="/">NHUAA <p class="slogan">Accountable Leadership, Engaged Membership</p></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04" aria-labelledby="navbar-toggler">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item"><a href="/" class="nav-link px-2 <?php echo $current_page == 'index.php' ? 'text-secondary' : 'text-white'; ?>" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/pages/about.php" class="nav-link px-2 <?php echo $current_page == 'about.php' ? 'text-secondary' : 'text-white'; ?>">About</a></li>
                <li class="nav-item"><a href="/pages/mission.php" class="nav-link px-2 <?php echo $current_page == 'mission.php' ? 'text-secondary' : 'text-white'; ?>">Mission</a></li>
                <li class="nav-item"><a href="/pages/issues.php" class="nav-link px-2 <?php echo $current_page == 'issues.php' ? 'text-secondary' : 'text-white'; ?>">Issues</a></li>
                <li class="nav-item"><a href="/pages/news.php" class="nav-link px-2 <?php echo $current_page == 'news.php' ? 'text-secondary' : 'text-white'; ?>">News</a></li>
                <li class="nav-item"><a href="/pages/events.php" class="nav-link px-2 <?php echo $current_page == 'events.php' ? 'text-secondary' : 'text-white'; ?>">Events</a></li>
                <li class="nav-item"><a href="/pages/contact.php" class="nav-link px-2 <?php echo $current_page == 'contact.php' ? 'text-secondary' : 'text-white'; ?>">Contact</a></li>
                <li class="nav-item"><a href="/pages/nh-local-unions.php" class="nav-link px-2 <?php echo $current_page == 'contact.php' ? 'text-secondary' : 'text-white'; ?>">NH Local Unions</a></li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($current_page == 'nh-local-unions.php') ? 'text-secondary' : 'text-white'; ?>" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" aria-controls="navbarDropdown">NH Locals</a>
                    <ul class="dropdown-menu blue-header" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white <?php echo $current_page == 'nh-local-unions.php' ? 'text-secondary' : ''; ?>" href="/pages/nh-local-unions.php">List of NH Local Unions</a></li>
                        <li><a class="dropdown-item text-white" href="#">Contact Your Local</a></li>
                        <li><a class="dropdown-item text-white" href="#">Get Involved in Your Union</a></li>
                    </ul>
                </li> -->
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>

