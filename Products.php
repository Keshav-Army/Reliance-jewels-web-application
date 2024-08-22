<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product jewellery</title>

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


    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800"
        rel="stylesheet">

    <style>
        main {
            background-color: white;
        }

        .items-container {
            width: 90%;
            margin: 0px 5%;
            padding: 20px 0px;

            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .item-container {
            margin: 10px 0;
            width: 230px;
            border: 1px solid gainsboro;
            border-radius: 3px;
            overflow: hidden;
            padding: 4px;
        }

        .item-image {
            width: 100%;
        }

        .item-name {
            color: #212121;
            font-weight: 600;
            font-size: 13px;
            font-family: "Barlow", sans-serif;
            text-align: center;
            margin-top: 8px;
            margin-bottom: 4px;
        }

        .price {
            text-align: center;
        }

        .current-price {
            color: #333;
            font-weight: 500;
            font-size: 14px;
            line-height: 30px;
            margin-right: -2px;
        }

        .orginal-price {
            text-decoration: line-through;
            color: #d3d3d3;
            font-weight: 400;
            line-height: 30px;
            font-size: 14px;
            margin: 0 0 0 3px;
        }

        .discount-price {
            color: #f00;
            font-size: 12px;
            margin: 0px 0 0 7px;
            font-weight: 500;
        }

        .btn-add-card {
            width: 80%;
            margin: 0px 10%;
            border: none;
            background-color: rgba(52, 231, 52, 0.856);
            color: white;
            border-radius: 5px;
            padding: 3px 0px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }

        .btn-add-card:hover {
            background-color: rgb(115, 225, 115);
        }

        .btn-add-card:active {
            background-color: rgb(52, 231, 52);
            color: white;
            font-weight: 700;
        }
    </style>

</head>

<body class="cnt-home">

    <!-- ============================================== HEADER : START ============================================== -->
    <?php include 'header.php'; ?>
    <!-- ============================================== HEADER : END ============================================== -->

    <main>
        <div class="items-container">

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
    <!-- <script src="js/jquery-1.11.1.min.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="js/owl.carousel.min.js"></script> -->
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