<?php
require_once 'config.php';
include 'dbConnect.php';
session_start();

$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
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

        <?php
        $ret = mysqli_query($con, "select * from reviews where id='$id'");
        $rowitems = mysqli_fetch_array($ret, MYSQLI_ASSOC);
        ?>
        <?php
        $queryy = "select * from all_movie_info";
        $rett = mysqli_query($con, $queryy);
        while ($roww = mysqli_fetch_array($rett)) {
            if ($rowitems['movie'] === $roww['id']) {
        ?>
                <h1 class="text-center"><a href="movie_details.php?id=<?php echo htmlentities($roww["id"]); ?>" class="text-decoration-none"><span class="text-primary"><?php echo htmlentities($roww["name"]); ?></span></a> Review</h1>
        <?php
            }
        }
        ?>

        <div class="row gap-2 px-2 my-4 d-flex justify-content-center ">
            <div class="col-5">
                <?php
                $queryy = "select * from all_movie_info";
                $rett = mysqli_query($con, $queryy);
                while ($roww = mysqli_fetch_array($rett)) {
                    if ($rowitems['movie'] === $roww['id']) {
                ?>
                        <div style="display:flex;justify-content:center;align-items:center;">
                            <img style="width:350px;height:450px;" src="images/shows/<?php echo htmlentities($roww['id']); ?>/<?php echo htmlentities($roww['movie_image']); ?>" alt="Movie">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-5">
                <div class="mb-5">
                    <h2 class="mb-3"><?php echo htmlentities($rowitems['title']); ?></h2>
                    <p class="mt-4"><?php echo htmlentities($rowitems['review']); ?></p>
                </div>
                <div class="d-flex justify-content-between align-item-center">
                    <div>
                        <i class="fa-solid fa-user text-success border rounded-circle bg-white p-1"></i><span class="ms-2"><?php echo htmlentities($rowitems['name']); ?></span>
                    </div>
                    <div>
                        <p><?php echo htmlentities($rowitems['time']); ?></p>
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