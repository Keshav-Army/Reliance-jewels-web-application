<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>R Keshav Jewels</title>

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
    .mySlidesTop {
      display: none
    }

    .mySlidesTop img {
      vertical-align: middle;
    }


    /* Slideshow container */
    .slideshow-container {
      /* border: 2px solid red; */
      height: auto;
      width: 100%;
      max-width: 100%;
      position: relative;
      margin: auto;
      overflow: hidden;
    }

    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    .prev:hover,
    .next:hover {
      background-color: #ffffffd2;
      color: rgba(0, 0, 0, 0.8);
    }

    .fadeTop {
      animation-name: Keshav;
      animation-duration: 1.5s;
    }

    @keyframes Keshav {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @media only screen and (max-width: 440px) {

      .prev,
      .next {
        font-size: 11px
      }
    }
  </style>
</head>

<body class="cnt-home">

  <!-- ============================================== HEADER ============================================== -->
  <?php include 'header.php'; ?>
  <!-- ============================================== HEADER : END ============================================== -->


  <div class="body-content outer-top-vs marginTop-0" id="top-banner-and-menu">

    <!-- SLIDE SHOW START -->

    <div class="slideshow-container">

      <div class="mySlidesTop fadeTop">
        <img src="images/SLIDER-IMAGES/5.jpg" style="width:100%">
      </div>

      <div class="mySlidesTop fadeTop">
        <img src="images/SLIDER-IMAGES/4.jpg" style="width:100%">
      </div>

      <div class="mySlidesTop fadeTop">
        <img src="images/SLIDER-IMAGES/6.jpg" style="width:100%">
      </div>

      <div class="mySlidesTop fadeTop">
        <img src="images/SLIDER-IMAGES/7.jpg" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <!-- SLIDE SHOW END -->
  </div>

  <!-- ============================================== Featured Products : START ============================================== -->
  <div class="container">
    <!-- Product Start -->
    <div class="slider-container">
      <button class="slider-nav left" id="prevBtn">&#10094;</button>
      <div class="items-container" id="slider">
        <!-- Product items will be dynamically inserted here// from product.js -->
      </div>
      <button class="slider-nav right" id="nextBtn">&#10095;</button>
    </div>
    <!-- Product End -->
  </div>
  <!-- ============================================== Featured Products : END ============================================== -->

  <div class="container">
    <div class="row">
      <!-- PRODUCT CATEGORIES <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">-->


      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 sidebar" data-aos="zoom-in">
        <div class="sidebar-widget hot-deals outer-bottom-xs hotDeals">
          <iframe width="100%" height="268px" src="https://www.youtube.com/embed/537LE8x6AdA" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <!-- /youtube video iframe -->



      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" data-aos="zoom-in">
            <div class="wide-banner cnt-strip">
              <div class="image"> <img class="img-responsive" src="images\JWEL-IMAGES\1.jpg" alt="" width="100%"> </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" data-aos="zoom-in">
            <div class="wide-banner cnt-strip">
              <div class="image"> <img class="img-responsive" src="images\JWEL-IMAGES\2.jpg" alt="" width="100%"> </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" data-aos="zoom-in">
            <div class="wide-banner cnt-strip">
              <div class="image"> <img class="img-responsive" src="images\JWEL-IMAGES\3.jpg" alt="" width="100%"> </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" data-aos="zoom-in">
            <div class="wide-banner cnt-strip">
              <div class="image"> <img class="img-responsive" src="images\JWEL-IMAGES\4.jpg" alt="" width="100%"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="container">
    <div class="row">
      <!-- DISCOVER OUT COLLECTION -->
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="zoom-in">
        <div style="font-family: 'Open Sans',sans-serif;color: #7c7993;text-align: center;margin: auto auto 20px auto;">
          <p style="font-size: 28px; margin: 0;padding: 0;">DISCOVER OUT COLLECTION</p>
          <p style="font-size: 13px; margin: 0;padding: 8px 0 0 0;">One Stop For All Your Jewellery Needs!</p>
          <div
            style="display: block; width: 150px; height: 1px; background-color: #7c7993; margin: 0 auto; margin-top: 10px">
          </div>
        </div>
      </div>
      <!-- Video Start -->
      <div class="margin-Btm30">
        <div class="col-md-3 col-sm-3 col-xs-6" data-aos="zoom-in">
          <div class="wide-banner cnt-strip video-part">
            <div class="video"><video src="videos/womenday.mp4" width="100%" autoplay muted loop></video> </div>
            <div class="card-body">
              <h5>Women's Day</h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6" data-aos="zoom-in">
          <div class="wide-banner cnt-strip video-part">
            <div class="video"> <video src="videos/DT.mp4" width="100%" autoplay muted loop></video> </div>
            <div class="card-body">
              <h5>Swarn Banga</h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6" data-aos="zoom-in">
          <div class="wide-banner cnt-strip video-part">
            <div class="video"> <video src="videos/Bella.mp4" width="100%" autoplay muted loop></video> </div>
            <div class="card-body">
              <h5>Bella</h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6" data-aos="zoom-in">
          <div class="wide-banner cnt-strip video-part">
            <div class="video"> <video src="videos/Aabhar.mp4" width="100%" autoplay muted loop></video> </div>
            <div class="card-body">
              <h5>Aabhar</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- Video End -->
    </div>
  </div>



  <div class="container">
    <div class="row">
      <!-- PRODUCT CATEGORIES -->
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="zoom-in">
        <div style="font-family: 'Open Sans',sans-serif;color: #7c7993;text-align: center;margin: auto auto 20px auto;">
          <p style="font-size: 28px; margin: 0;padding: 0;">PRODUCT CATEGORIES</p>
          <p style="font-size: 13px; margin: 0;padding: 8px 0 0 0;">One Stop For All Your Jewellery Needs!</p>
          <div
            style="display: block; width: 150px; height: 1px; background-color: #7c7993; margin: 0 auto; margin-top: 10px">
          </div>
        </div>
      </div>
      <!-- Offer Start -->
      <div class="margin-Btm30">
        <div class="col-md-3 col-sm-3" data-aos="zoom-in">
          <div class="wide-banner cnt-strip">
            <div class="image"> <img class="img-responsive" src="images\JWEL-IMAGES\1.jpg" alt="" width="100%"> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3" data-aos="zoom-in">
          <div class="wide-banner cnt-strip">
            <div class="image"> <img class="img-responsive" src="images\JWEL-IMAGES\2.jpg" alt="" width="100%"> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3" data-aos="zoom-in">
          <div class="wide-banner cnt-strip">
            <div class="image"> <img class="img-responsive" src="images\JWEL-IMAGES\3.jpg" alt="" width="100%"> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3" data-aos="zoom-in">
          <div class="wide-banner cnt-strip">
            <div class="image"> <img class="img-responsive" src="images\JWEL-IMAGES\4.jpg" alt="" width="100%"> </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ===== my code Vikash ===== -->

  <!-- ===== Showroom Jewellery ===== -->
  <div class="container">
    <div class="row">
      <!-- title -->
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="zoom-in">
        <div class="srj_title">
          <h3>Showroom Jewellery</h3>
          <h4>One Stop For All Your Jewellery Needs!</h4>
          <i class="title_border_btm"></i>
        </div>
      </div>

      <!-- Diamond Showroom Jewellery boxes -->
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="sroom_jewel srj_dia">
          <a href="">
            <h2><span>Diamond</span> Jewellery <img src="images/right_arrow.png" /></h2>
          </a>
        </div>
      </div>

      <!-- Gold Showroom Jewellery boxes -->
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="sroom_jewel srj_gol">
          <a href="">
            <h2><span>Gold</span> Jewellery <img src="images/right_arrow.png" /></h2>
          </a>
        </div>
      </div>

      <!-- Silver Showroom Jewellery boxes -->
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="sroom_jewel srj_sil">
          <a href="">
            <h2><span>Silver</span> Jewellery <img src="images/right_arrow.png" /></h2>
          </a>
        </div>
      </div>

      <!-- Platinum Showroom Jewellery boxes -->
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="sroom_jewel srj_pla">
          <a href="">
            <h2><span>Platinum</span> Jewellery <img src="images/right_arrow.png" /></h2>
          </a>
        </div>
      </div>
    </div><!-- /row -->
  </div><!-- /container -->

  <!-- ===== Latest From Reliance Jewels ===== -->
  <div class="container">
    <div class="row">
      <!-- title -->
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="zoom-in">
        <div class="srj_title">
          <h3>Latest From Reliance Jewels</h3>
          <i class="title_border_btm"></i>
        </div>
      </div>


      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="latest_rj">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/537LE8x6AdA" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="latest_rj">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/G5z_Bk-agJU" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="zoom-in">
        <div class="rj_view_all"><a href="">View All</a></div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->

  <!-- ===== News and insights ===== -->
  <div class="container">
    <div class="row">
      <!-- title -->
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="zoom-in">
        <div class="ni_title">
          <h3>News and insights</h3>
          <i class="title_border_btm"></i>
        </div>
      </div>

      <!-- Lounches -->
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="nws_ins ni_ltst">
          <a href="">
            <h2>Lounches <img src="images/right_arrow.png" /></h2>
          </a>
        </div>
      </div>

      <!-- Media -->
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="nws_ins ni_mdia">
          <a href="">
            <h2>Media <img src="images/right_arrow.png" /></h2>
          </a>
        </div>
      </div>
    </div><!-- /row -->
  </div><!-- /container -->

  <!-- ===== Locate Store - Gift Card ===== -->
  <div class="container">
    <div class="row">
      <!-- Locate Store -->
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="locate_store">
          <div class="nws_ins ni_mdia">
            <a href="">
              <h2>Locate Store <img src="images/right_arrow.png" /></h2>
            </a>
          </div>
        </div>
      </div><!-- /Locate Store -->
      <!-- Gift Card -->
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" data-aos="zoom-in">
        <div class="gift_card">
          <div class="nws_ins ni_mdia">
            <a href="">
              <h2>Gift Card <img src="images/right_arrow.png" /></h2>
            </a>
          </div>
        </div>
      </div><!-- /Gift Card -->
    </div><!-- /row -->
  </div><!-- /container -->

  <!-- ===== Bringing Your Golden Wishes to Life ===== -->
  <div class="golden_wishes">
    <div class="container">
      <div class="row row-pad15">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="zoom-in">
          <h2>Bringing Your Golden Wishes to Life</h2>
          <i class="title_border_btm"></i>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col_pad0" data-aos="zoom-in">
          <div class="golden_step">

            <img src="images/golden-steps-logo.png" alt="Golden Step Scheme" />
            <h2>Golden Steps Scheme</h2>
            <p>Shopping for the finest jewellery has never been this easy.</p>
            <p>Plan your Jewellery purchase in advance & Earn up to 350% of one month’s Instalment *</p>

          </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col_pad0" data-aos="zoom-in">
          <div class="swarna_vriddhi">
            <i class="inset_shadow"></i>
            <img src="images/swarna-vriddhi-logo-sm.png" alt="Swarna Vriddhi Scheme" />
            <h2>Swarna Vriddhi Scheme</h2>
            <p>A 9-month Gold Weight based Jewellery purchase scheme, which credits gold grammage to your account
              against your instalment amount*</p>
            <p>A piece of elegance at your doorstep</p>

          </div>
        </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /golden_wishes -->


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
  <script src="js/script.js"></script>

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