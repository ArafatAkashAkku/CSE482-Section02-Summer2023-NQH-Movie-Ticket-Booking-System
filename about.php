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
    <title>MTBS | About</title>
</head>

<body class="overflow-x-hidden">
    <!-- header start  -->
    <?php include("includes/header.php") ?>
    <!-- header end  -->

    <!-- main start  -->
    <main>
        <section>
            <div class="text-center">
                <h1>About Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vero praesentium molestiae. Aut ex et facere dicta atque, expedita soluta non cupiditate dolorum perferendis quod beatae, eligendi id suscipit quo.
                    <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi a consequatur quae possimus officiis placeat, earum molestiae non officia dignissimos culpa eius sit soluta modi architecto. Libero earum hic eius adipisci, iure autem deleniti? Odit animi corporis tempore ab sed rerum officia enim id ipsam, at minima quaerat illo beatae?
                </p>
            </div>
            <div class="text-center">
                <h1>About Cineplex</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vero praesentium molestiae. Aut ex et facere dicta atque, expedita soluta non cupiditate dolorum perferendis quod beatae, eligendi id suscipit quo.
                    <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi a consequatur quae possimus officiis placeat, earum molestiae non officia dignissimos culpa eius sit soluta modi architecto. Libero earum hic eius adipisci, iure autem deleniti? Odit animi corporis tempore ab sed rerum officia enim id ipsam, at minima quaerat illo beatae?
                </p>
            </div>
        </section>

    </main>
    <!-- main end  -->

    <!-- footer start  -->
    <?php include("includes/footer.php") ?>
    <!-- footer end  -->

    <!-- external js link  -->
    <script type="text/javascript" src="externals/js/script.js"></script>
    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- swipper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- internal script link -->
</body>

</html>