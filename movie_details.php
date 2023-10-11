<?php
require_once 'config.php';
include 'dbConnect.php';
session_start();

$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

if (isset($_POST['item']) && $_POST['item'] != "") {
    $item = $_POST['item'];
    $result = mysqli_query($con, "SELECT * FROM `all_movie_info` WHERE `id`='$item'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $rating = $row['rating'];
    $item = $row['item'];
    $image = $row['movie_image'];
    $id = $row['id'];

    $cartArray = array(
        $item => array(
            'name' => $name,
            'rating' => $rating,
            'quantity' => 1,
            'price' => 100,
            'item' => $item,
            'image' => $image,
            'id' => $id
        )
    );

    if (empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        echo "
        <script>
        alert('Ticket is added to your cart!');
        window.location.href='cart.php';
        </script>
        ";
    } else {
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if (in_array($item, $array_keys)) {
            echo "
            <script>
            alert('Ticket is already added to your cart!');
            window.location.href='cart.php';
            </script>
            ";
        } else {
            $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray);
            echo "
        <script>
        alert('Ticket is added to your cart!');
        window.location.href='cart.php';
        </script>
        ";
        }
    }
}
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
            <?php
            $ret = mysqli_query($con, "select * from all_movie_info where id='$id'");
            $rowitems = mysqli_fetch_array($ret, MYSQLI_ASSOC);
            ?>
            <div class="row gap-2 d-flex align-items-center justify-content-center">
                <div class="col-12 col-sm-5">
                    <img src="images/shows/<?php
                                            echo ($rowitems['id']);
                                            ?>/<?php
                                                echo ($rowitems['movie_image']);
                                                ?>" style="width:100vw" class="img-fluid mb-3 bg-light error-img" loading="lazy" alt="Movie">
                </div>

                <div class="col-12 col-sm-5">
                    <h2>Title:&nbsp;<?php
                                    echo ($rowitems["name"]);
                                    ?></h2>
                    <h3>Released Date:&nbsp;<?php
                                            echo ($rowitems["release"]);
                                            ?></h3>
                    <p>Length:&nbsp;<?php
                                    echo ($rowitems["runtime"]);
                                    ?></p>
                    <p>Genre:&nbsp;
                        <?php
                        if ($rowitems["genre"] == 1) {
                            echo "Advnenture";
                        } else if ($rowitems["genre"] == 2) {
                            echo "Comedy";
                        } else if ($rowitems["genre"] == 3) {
                            echo "Drama";
                        } else if ($rowitems["genre"] == 4) {
                            echo "Thriller";
                        } else if ($rowitems["genre"] == 5) {
                            echo "Action";
                        } else if ($rowitems["genre"] == 6) {
                            echo "Animation";
                        } else {
                            echo "No Genre";
                        }
                        ?></p>
                    <p>IMDb:&nbsp;<?php
                                    echo ($rowitems["rating"]);
                                    ?>/10</p>
                    <form action="" method="post">
                        <input type="hidden" name="item" value="<?php
                                                                echo htmlentities($rowitems["item"]);
                                                                ?>">
                        <button class="btn btn-width btn-outline-success bg-success text-light" type="submit">Book Now</button>
                    </form>

                </div>

                <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                    <h2>Watch Trailer</h2>
                    <?php
                    echo ($rowitems["trailer"]);
                    ?>
                </div>

                <div class="col-12 text-center">
                    <h2>About Movie</h2>
                    <p><?php
                        echo ($rowitems["about"]);
                        ?></p>
                </div>

                <div class="col-12 text-center">
                    <h2>Casting</h2>
                    <div class="d-flex flex-wrap gap-2 align-items-center justify-content-center">
                        <div>
                            <i class="fa-solid fa-user fs-3 text-success border rounded-circle bg-white p-3"></i>
                            <p><?php
                                echo ($rowitems["cast"]);
                                ?></p>
                        </div>
                    </div>
                </div>



    </main>
    <!-- main end  -->

    <!-- footer start  -->
    <?php include("includes/footer.php") ?>
    <!-- footer end  -->
    <!-- jQuery library is required. -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- external js link  -->
    <script type="text/javascript" src="externals/js/script.js"></script>
    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- swipper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- internal script link -->
</body>

</html>