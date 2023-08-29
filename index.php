<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- external css link  -->
    <link rel="stylesheet" href="externals/css/style.css">
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- swipper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- font awesome cdn 6.3.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- favicon link  -->
    <link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon">
    <!-- website title  -->
    <title>MTBS</title>
</head>

<body class="overflow-x-hidden">
    <!-- header start  -->
    <?php include("includes/header.php") ?>
    <!-- header end  -->
    <!-- main start  -->
    <main>
        <!-- top banner section start  -->
        <section>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banners/banner1.jpg" class="d-block w-100 error-image" loading="lazy" alt="Banner">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banners/banner2.jpg" class="d-block w-100 error-image" loading="lazy" alt="Banner">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banners/banner1.jpg" class="d-block w-100 error-image" loading="lazy" alt="Banner">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- top banner section end  -->

        <!-- now showing section start  -->
        <section id="now-showing" class="py-3">
            <div class="text-center">
                <h1>Now Showing</h1>
                <a href="">See All</a>
                <div class="swiper all-shows mx-4 mt-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/shows/show1.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show3.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show1.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show3.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show1.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show3.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                    </div>
                    <div class="swiper-button-next text-light"></div>
                    <div class="swiper-button-prev text-light"></div>
                </div>
            </div>
        </section>
        <!-- now showing section end  -->

        <!-- review section start  -->
        <section id="reviews" class="py-3">
            <div class="text-center">
                <h1>Reviews</h1>
                <div class="swiper slider-for-review mx-4 mt-3">
                    <div class="swiper-wrapper mb-5">
                        <div class="swiper-slide review-bg p-3">
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam nulla ex quod alias necessitatibus vel consequuntur debitis mollitia saepe quos.</h5>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="swiper-slide review-bg p-3">
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam nulla ex quod alias necessitatibus vel consequuntur debitis mollitia saepe quos.</h5>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="swiper-slide review-bg p-3">
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam nulla ex quod alias necessitatibus vel consequuntur debitis mollitia saepe quos.</h5>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="swiper-slide review-bg p-3">
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam nulla ex quod alias necessitatibus vel consequuntur debitis mollitia saepe quos.</h5>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="swiper-button-next text-success"></div>
                    <div class="swiper-button-prev text-success"></div>
                </div>
            </div>
        </section>
        <!-- review section end  -->

        <!-- upcoming shows section start  -->
        <section id="upcoming-shows" class="py-3">
            <div class="text-center">
                <h1>Upcoming Shows</h1>
                <a href="">See All</a>
                <div class="swiper all-shows mx-4 mt-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/shows/show2.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show4.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show2.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show4.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show2.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/shows/show4.jpg " class="img-fluid mb-3 bg-light error-img" alt="movie" loading="lazy">
                            <a class="text-dark text-decoration-none" href="movie_details.php">
                                <h3>Movie name</h3>
                            </a>
                            <p>Movie Decsription</p>
                            <button class="btn btn-link" type="submit" name="Add_To_Cart">Buy Tickets</button>
                        </div>
                    </div>
                    <div class="swiper-button-next text-light"></div>
                    <div class="swiper-button-prev text-light"></div>
                </div>
            </div>
        </section>
        <!-- upcoming shows section end  -->

    </main>
    <!-- main end  -->




    <!-- footer start  -->
    <?php include("includes/footer.php") ?>
    <!-- footer end  -->


    <!-- external js link  -->
    <link rel="stylesheet" href="externals/js/script.js">
    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- swipper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- internal script link -->
    <script>
        // swipper for all shows 
        const allshows = new Swiper('.all-shows', {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: false,
            },
            breakpoints: {
                50: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                980: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                }
            }
        });
        // swipper for reviews
        const allreviewswiper = new Swiper('.slider-for-review', {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                50: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                700: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                980: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                }
            }
        });
    </script>
</body>

</html>