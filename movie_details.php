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
    <title>MTBS | Movie Details</title>
</head>

<body class="overflow-x-hidden">
    <!-- header start  -->
    <?php include("includes/header.php") ?>
    <!-- header end  -->
    <!-- main start  -->
    <main>

        <div class="px-2 py-3">
            <h1 class="text-center">Movie Details</h1>
            <div class="row gap-2 d-flex align-items-center justify-content-center">
                <div class="col-12 col-sm-5">
                    <img src="images/avenger.jpg" class="img-fluid mb-3 bg-light error-img" loading="lazy" alt="">
                </div>

                <div class="col-12 col-sm-5">
                    <h2>Title: Avengers</h2>
                    <h3>Released Date: MARCH 13, 2020</h3>
                    <p>Length: 1h 50m</p>
                    <p>Genre: Action, Fantasy</p>
                    <p>IMDb: 5.7/10</p>
                    <button class="btn btn-width btn-outline-success bg-success text-light">Book Now</button>``
                </div>

                <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                    <h2>Watch Trailer</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6ZfuNTqbHE8?si=OpNQutUpwgXwf4i7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="col-12 text-center">
                    <h2>About Movie</h2>
                    <p>The Avengers are a fictional team of superheroes appearing in American comic books published by Marvel Comics. The team made its debut in The Avengers #1 (cover-dated Sept. 1963), created by writer-editor Stan Lee and artist/co-plotter Jack Kirby. Labeled "Earth's Mightiest Heroes", the Avengers originally consisted of Iron Man, the Wasp, the Hulk, Thor (Marvel Comics), and Hank Pym. The original Captain America was discovered trapped in ice in issue #4, and joined the group after they revived him. The Avengers could be considered as a Lee and Kirby's renovation of a previous superhero team, All-Winners Squad, who appeared in comic books series published by Marvel Comics' predecessor Timely Comics. A rotating roster became a hallmark of the series, although one theme remained consistent: the Avengers fight "the foes no single superhero can withstand." The team, famous for its battle cry of "Avengers Assemble!", has featured humans, superhumans, mutants, Inhumans, deities, androids, aliens, legendary beings, and even former villains.</p>
                </div>

                <div class="col-12 text-center">
                    <h2>Casting</h2>
                    <div class="d-flex flex-wrap gap-2 align-items-center justify-content-center">

                        <div>
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <p>Lorem, ipsum dolor.</p>
                        </div>

                        <div>
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <p>Lorem, ipsum dolor.</p>
                        </div>

                        <div>
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <p>Lorem, ipsum dolor.</p>
                        </div>

                        <div>
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <h2>Crew</h2>
                    <div class="d-flex flex-wrap gap-2 align-items-center justify-content-center">

                        <div>
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <p>Lorem, ipsum dolor.</p>
                        </div>

                        <div>
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <p>Lorem, ipsum dolor.</p>
                        </div>

                        <div>
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <p>Lorem, ipsum dolor.</p>
                        </div>

                        <div>
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



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
</body>

</html>