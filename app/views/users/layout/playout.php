<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../../../../../newshop/publics/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../newshop/publics/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<style>

</style>

<body>
    <!-- <img src="../../../../../newshop/" alt=""> -->

    <div class="container-fluid m-0 p-0">
        <!-- NAV HOHME -->
        <?php
        include_once 'navHome.php';
        ?>
        <!-- END NAV HONE -->
        <div class="container ">

            <!-- header -->
            <?php
            include_once 'header.php';
            ?>
            <!-- end header -->
            <main>

                <!-- PRODUCT HOME -->
                <?php
                // include_once 'productHome.php';

                ?>
                <?php include_once "$viewnoidung" ?>



                <!--END PRODUCT HOME -->

            </main>

        </div>






        <!-- footer -->
        <?php
        include_once 'footer.php';
        ?>
        <!-- end footer -->
    </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script src="publics/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
    </script>
</body>

</html>