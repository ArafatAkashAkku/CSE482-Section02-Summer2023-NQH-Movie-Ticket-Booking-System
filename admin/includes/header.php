<style>
    .navigation-header {
        width: 100%;
        z-index: 1000;
    }
</style>
<header>
        <nav class="navbar navbar-expand-lg bg-success navigation-header">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="index.php">MTBS</a>
                <button class="navbar-toggler bg-light text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
                        </li>
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
                        <li class="nav-item">
                            <a class="nav-link text-light" href="login.php">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="login.php">Orders</a>
                        </li>
                    </ul>
                </div> -->
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