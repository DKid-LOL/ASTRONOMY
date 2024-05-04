<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <div class="hero_area">
    <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="" />
              <span>
                Astronomy
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>              
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#"> Trang Chủ </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Trang Chủ </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Trang Chủ </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Trang Chủ </a>
                </li>
              </ul>
              <div class="user_option">
                <a href="{{ url('/login') }}">
                  <span>
                    Đăng Nhập
                  </span>
                </a>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
            <div>
              <div class="custom_menu-btn ">
                <button>
                  <span class=" s-1">
  
                  </span>
                  <span class="s-2">
  
                  </span>
                  <span class="s-3">
  
                  </span>
                </button>
              </div>
            </div>
  
          </nav>
        </div>
      </header>
      <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            <h2 class="title">my<span class="highlight">BOT</span></h2>
            <p class="intro">Đây là trang web được làm ra để nghiên cứu về thiên văn học</p>
            <div class="btns">
                <a class="btn btn-cta-secondary" href="#" target="_blank">Đăng Nhập</a>
                <a class="btn btn-cta-primary" href="#" target="_blank">Đăng Kí</a>
            </div>
        </div>
    </section>
    </div>

<div id="app">
    @yield('content')
</div>

<section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="images/logo.png" alt="" />
            <span>
              Astronomy
            </span>
          </div>
          <div class="social_box">
            <a href="#">
              <img src="images/fb.png" alt="">
            </a>
            <a href="#">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="#">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="#">
              <img src="images/instagram.png" alt="">
            </a>
            <a href="#">
              <img src="images/youtube.png" alt="">
            </a>
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Link
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="index.html"> Home </a>
                  </li>
                  <li class="">
                    <a class="" href="about.html"> Home </a>
                  </li>
                  <li class="">
                    <a class="" href="work.html"> Home </a>
                  </li>
                  <li class="">
                    <a class="" href="category.html"> Home </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                Home
              </h5>
              <p>
                Home
              </p>
            </div>

            <div class="col-md-3 col-lg-2 offset-lg-1">
              <h5>
                Home
              </h5>
              <p>
                Home
              </p>
            </div>

            <div class="col-md-3  offset-lg-1">
              <div class="info_form ">
                <h5>
                  Newsletter
                </h5>
                <form action="">
                  <input type="email" placeholder="Email">
                  <button>
                    Subscribe
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="info_contact layout_padding2">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/location.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Vị Trí
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/mail.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        test@gmail.com
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/call.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Số điện thoại : .........
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> Bản quyền thuộc về nhóm mấy k nhớ
      </p>
    </div>
  </footer>
</body>
</html>