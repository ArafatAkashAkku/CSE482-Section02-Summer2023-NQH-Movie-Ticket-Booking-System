<style>
    .navigation-header {
        width: 100%;
        z-index: 1000;
    }
</style>
<header style="position: relative;">
    <nav class="navbar navbar-expand-lg bg-success navigation-header">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="index.php">MTBS</a>
            <button class="navbar-toggler bg-light text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="index.php">Welcome&nbsp;<span class=text-warning><?php echo $_SESSION['user_fullname']; ?></span></a>
                        </li>

                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
                        </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Movies
                        </a>
                        <ul class="dropdown-menu bg-success">
                            <li><a class="dropdown-item text-light bg-success" href="index.php#now-showing">Now Showing</a></li>
                            <li><a class="dropdown-item text-light bg-success" href="index.php#upcoming-shows">Upcoming</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="cineplex.php">Cineplex</a>
                    </li>
                    <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="account.php?email=<?php
                                                                                    echo $_SESSION['user_email'];
                                                                                    ?>&id=<?php echo $_SESSION['user_id']; ?>">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="cart.php">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="logout.php">Logout</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="login.php">Login</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <form class="d-flex flex-column" role="search" action="search_result.php" method="GET" autocomplete="off">
                    <div class="d-flex">
                        <input type="text" id="search" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                                echo $_GET['search'];
                                                                            } ?>" class="form-control" placeholder="Search data">
                        <button class="btn btn-outline-success bg-light text-success" type="submit">Search</button>
                    </div>
                    <div class="bg-light" id="display" style="position: absolute;top: 48px;width: 21vw;right: 6px;"></div>
                </form>
                <!-- Suggestions will be displayed in the following div. -->
            </div>
        </div>
    </nav>
</header>

<script>
    const navigationBar = document.querySelector(".navigation-header");
    // windows scroll function 
    window.onscroll = () => {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navigationBar.style.position = "fixed";
        } else {
            navigationBar.style.position = "relative";
        }
    };
</script>