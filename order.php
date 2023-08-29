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
    <title>MTBS | Orders</title>
</head>

<body class="overflow-x-hidden">
    <!-- header start  -->
    <?php include("includes/header.php") ?>
    <!-- header end  -->
    <!-- main start  -->
    <main>

        <section class="h-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-10 col-xl-8">
                        <div class="card" style="border-radius: 10px;">
                            <div class="card-header px-4 py-5">
                                <h5 class="text-muted mb-0">Book your ticket </h5>
                            </div>
                            <div class="card shadow-0 border mb-4">
                                <div class="card-body">
                                    <div class="container h-100 py-5">
                                        <div class="row d-flex justify-content-center align-items-center h-100">
                                            <div class="col">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="fw-bold mb-0">Movie Name</th>
                                                                <th scope="col">Format</th>
                                                                <th scope="col">Seat book</th>
                                                                <th scope="col">Quantity</th>
                                                                <th scope="col">Price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" class="border-bottom-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="https://image.tmdb.org/t/p/w200/1E5baAaEse26fej7uHcjOgEE2t2.jpg"
                                                                            class="img-fluid rounded-3"
                                                                            style="width: 120px;" alt="Book">
                                                                        <div class="flex-column ms-4">
                                                                            <p class="mb-2">Fast X</p>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td class="align-middle border-bottom-0">
                                                                    <p class="mb-0" style="font-weight: 500;">
                                                                        Premier</p>
                                                                </td>
                                                                <td class="align-middle border-bottom-0">
                                                                    <p class="mb-0" style="font-weight: 500;">
                                                                        Seat No.</p>
                                                                </td>
                                                                <td class="align-middle border-bottom-0">
                                                                    <div class="d-flex flex-row">
                                                                        <button class="btn btn-link px-2"
                                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                            <i class="fas fa-minus"></i>
                                                                        </button>
                                                                        <input id="form1" min="0" name="quantity"
                                                                            value="2" type="number"
                                                                            class="form-control form-control-sm"
                                                                            style="width: 50px;" />
                                                                        <button class="btn btn-link px-2"
                                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                <td class="align-middle border-bottom-0">
                                                                    <p class="mb-0" style="font-weight: 500;">$449.
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-2 px-4 py-4"
                            style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">
                                <a class="nav-link text-light" href="checkout.php">Checkout</a>
                        </div>
                    </div>
                </div>
        </section>

        <!-- footer start  -->
        <?php include("includes/footer.php") ?>
        <!-- footer end  -->

</body>

</html>