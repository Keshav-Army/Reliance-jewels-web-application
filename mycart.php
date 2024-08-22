<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>

    <!-- On scroll Animtaion CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bag.css">



    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800"
        rel="stylesheet">

</head>

<body class="cnt-home">

    <!-- ============================================== HEADER : START ============================================== -->
    <?php include 'header.php'; ?>
    <!-- ============================================== HEADER : END ============================================== -->

    <main>
        <div class="cart-container">
            <div class="cart-item">
                <img src="images/PIMAGES/NOSDR18CO.jpg" alt="Product Image">
                <div class="item-details">
                    <!-- <h5>ADIDAS</h5> -->
                    <div class="item-name">Reliance Jewels 14 Kt Gold & Diamond Nose Pin</div>
                    <div class="price">
                        <span class="current-price">₹ 1999</span>
                        <span class="orginal-price">₹ 234</span>
                        <span class="discount-price">(32% OFF)</span>
                    </div>
                    <p class="text-muted">14 days return available</p>
                    <p class="text-muted">Delivery by <strong>10 Oct 2023</strong></p>
                </div>
                <button class="remove-item">&times;</button>
            </div>

            <div class="cart-summary">
                <h5>PRICE DETAILS (2 Items)</h5>
                <hr>
                <div class="price-detail">
                    <p>Total MRP</p>
                    <p>Rs 1284</p>
                </div>
                <div class="price-detail">
                    <p>Discount on MRP</p>
                    <p style="color: green;">-Rs 143</p>
                </div>
                <div class="price-detail">
                    <p>Convenience Fee</p>
                    <p>Rs 99</p>
                </div>
                <hr>
                <div class="price-detail total-amount">
                    <p>Total Amount</p>
                    <p>Rs 1240</p>
                </div>
                <button class="btn-place-order">PLACE ORDER</button>
            </div>
        </div>
    </main>


    <!-- ============================================== FOOTER : START ============================================== -->
    <?php include 'footer.php'; ?>
    <!-- ============================================== FOOTER : END ============================================== -->



    <!-- product items -->
    <script src="js/prduct-details/itemsproduct.js"></script>
    <!-- product script js -->
    <script src="js/prduct-details/allproduct.js"></script>

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="js/script.js"></script> -->

    <!-- On scrole Animtaion AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 180,
            duration: 1000,
        });
    </script>

</body>

</html>