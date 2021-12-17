<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>tugasmai</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('public/tugasmai') }}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="{{ url('public/tugasmai') }}/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ url('public/tugasmai') }}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('public/tugasmai') }}/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Maindashop
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('home') }}"home.html>Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}"about.html> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('furniture') }}"furniture.html>Furnitures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('blog') }}"blog.html>Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}"contact.html>Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}"login.html>Login</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="">
              <span>
              <
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                  <div class="card" style="margin-bottom: 100px">
                    <div class="card-header">
                        Alamat
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <label for="" class="control-label">Provinsi</label>
                            <select name="" id="" class="form-control" onchange="gantiProvinsi(this.value)">
                              <option value="">Pilih Provinsi</option>
                              @foreach ($list_provinsi as $provinsi)
                                  <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="control-label">Kabupaten</label>
                            <select name="" id="kabupaten" class="form-control" onchange="gantiKabupaten(this.value)">
                              <option value="">Pilih Provinsi terlebih dahulu</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="control-label">Kecamatan</label>
                            <select name="" id="kecamatan" class="form-control" onchange="gantiKecamatan(this.value)">
                              <option value="">Pilih Kabupaten terlebih dahulu</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="control-label">Desa</label>
                            <select name="" id="desa" class="form-control">
                              <option value="">Pilih Kecamatan terlebih dahulu</option>
                            </select>
                          </div>                
                        </div>
                          <button class="btn btn-dark " style="margin-top: 20px"><i class="fa fa-save"></i> Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  <!-- info section -->
  <section class="info_section long_section">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : 0895373090406
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : maisinadila@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row ">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="{{ url('public/tugasmai') }}/index.html">Home <span class="sr-only">(current)</span></a>
                <a class="" href="{{ url('public/tugasmai') }}/about.html"> About</a>
                <a class="" href="{{ url('public/tugasmai') }}/furniture.html">Furniture</a>
                <a class="" href="{{ url('public/tugasmai') }}/blog.html">Blog</a>
                <a class="" href="{{ url('public/tugasmai') }}/contact.html">Contact Us</a>
                <a class="" href="{{ url('public/tugasmai') }}/login.html">Login</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="{{ url('public/tugasmai') }}/images/f1.png" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public/tugasmai') }}/images/f2.png" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public/tugasmai') }}/images/f3.png" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public/tugasmai') }}/images/f4.png" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public/tugasmai') }}/images/f5.png" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public/tugasmai') }}/images/f6.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Maindashop</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="{{ url('public/tugasmai') }}/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{ url('public/tugasmai') }}/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="{{ url('public/tugasmai') }}/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
<script>
      function gantiProvinsi(id) {
        $.get("api/provinsi/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/> `;
          }
          $("#kabupaten").html(option)
        });
      }
      function gantiKabupaten(id) {
        $.get("api/kabupaten/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/> `;
          }
          $("#kecamatan").html(option)
        });
      }
      function gantiKecamatan(id) {
        $.get("api/kecamatan/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option += `<option value="${item.id}">${item.name}<option/>`;
          }
          $("#desa").html(option)
        });
      }
    </script>
</body>

</html>
