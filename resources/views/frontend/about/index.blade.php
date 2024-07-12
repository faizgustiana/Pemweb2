<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>NF-Parking</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
              NF-Parking
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              <li class="nav-item active">
                  <a class="nav-link" href="{{url('welcome')}}">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('frontend/about')}}"> About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('frontend/feature')}}"> Features </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('frontend/services')}}"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('frontend/contact')}}">Contact us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- why section -->
  <section class="why_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Why Choose Us
              </h2>
            </div>

            <p>
              Kami memiliki lahan untuk menampun lebihdari 300 kendaraan yang memiliki pengamnan yang memadai.
              Tempat kami juga memiliki akses yang mudah, nyaman dan strategis.
            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-container">
            <div class="row">
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="{{asset('frontend/images/w-1.jpg')}}" alt="">
                  <a href="">
                    <img src="{{asset('frontend/images/link.png')}}" alt="">
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="{{asset('frontend/images/w-2.jpg')}}" alt="">
                  <a href="">
                    <img src="{{asset('frontend/images/link.png')}}" alt="">
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="{{asset('frontend/images/w-3.jpg')}}" alt="">
                  <a href="">
                    <img src="{{asset('frontend/images/link.png')}}" alt="">
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="{{asset('frontend/images/w-4.jpg')}}" alt="">
                  <a href="">
                    <img src="{{asset('frontend/images/link.png')}}" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end why section -->

  <!-- service section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h6>
            Subscribe Now
          </h6>
          <p>
            Anda harus berlangganan pada tempat parkir kami karena kami menyediakan fasilitas yang aman, terjamin, 
            dan nyaman untuk menyimpan kendaraan Anda dengan harga yang terjangkau.
          </p>
          <form action="">
            <input type="text" placeholder="Enter your email">
            <div class="d-flex justify-content-end">
              <button>
                subscribe
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <h6>
            Information
          </h6>
          <ul>
            <li>
              <a href="">
                > Click here for more information
              </a>
            </li>
          </ul>
        </div>
       
        <div class="col-lg-4">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="{{asset('frontend/images/location.png')}}" alt="">
              <span> STT Nurul Fiki Kampus B</span>
            </a>
            <a href="">
              <img src="{{asset('frontend/images/call.png')}}" alt="">
              <span>+62 865432112</span>
            </a>
            <a href="">
              <img src="{{asset('frontend/images/envelope.png')}}" alt="">
              <span> info@nurulfikri.ac.id</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="{{asset('frontend/images/fb.png')}}" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="{{asset('frontend/images/twitter.png')}}" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="{{asset('frontend/images/linkedin.png')}}" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="{{asset('frontend/images/insta.png')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="">blank</a>
    </p>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>

</body>

</html>