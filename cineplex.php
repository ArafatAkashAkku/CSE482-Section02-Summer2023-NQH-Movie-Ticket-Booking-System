<?php
require_once 'config.php';
include 'dbConnect.php';
session_start();

?>

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
    <title>MTBS | Cineplex</title>
</head>

<body class="overflow-x-hidden">
    <!-- header start  -->
    <?php include("includes/header.php") ?>
    <!-- header end  -->
    <!-- main start  -->
    <main>
        <section class="px-2 pb-3">
            <h1 class="text-center">Cineplex Near Dhaka</h1>
            <div class="row gap-3 d-flex justify-content-center align-items-center">
                <?php
                $ret = mysqli_query($con, "select * from cineplex_info order by `id` desc");
                while ($row = mysqli_fetch_array($ret)) {
                ?>
                    <div class="card col-sm-4 col-12" style="width: 18rem;">
                        <img class="card-img-top" src="images/cineplex/<?php
                                                                        echo htmlentities($row['id']);
                                                                        ?>/<?php
                                                                            echo htmlentities($row['cineplex_image']);
                                                                            ?>" class="img-fluid mb-3 bg-light error-img" loading="lazy" alt="cineplex">
                        <div class="card-body">
                            <h5 class="card-title"><?php
                                                    echo htmlentities($row["name"]);
                                                    ?></h5>
                            <p class="card-text"><?php
                                                    echo htmlentities($row["about"]);
                                                    ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php
                                                        echo htmlentities($row["location"]);
                                                        ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="<?php
                                        echo htmlentities($row["url"]);
                                        ?>" class="card-link" target="_blank">Get Location</a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
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