<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href="img/v1.jpg" />
    <title>sites</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- This is Latest Bootstrap 5 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
    <style>
      #preloader
        {
            width: 100%;
            min-height: 100%;
            object-fit: cover;
        }
      #loader
        {
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 1;
        }

         .navbar .navbar-nav .nav-link:hover {
    color: #ffacb7;
  }
  @media screen and (min-width: 992px) {
    .navbar {
      padding: 0;
    }
  }
  
  .navbar .navbar-nav .nav-link {
    padding: 1em;
    transition: all 0.5s;
    color: #fff;
    font-size: 1.1em;
  }
  .navbar-brand {
    font-size: 1.5em;
  }
  @media screen and (max-width: 991px) {
    .navbar-brand {
      padding-left: 0.7em;
    }
    .navbar-nav {
      padding-top: 0.5em;
    }
  }
  ul.navbar-nav.me-auto.mb-2.mb-lg-0 
      {
          margin: 0 25px;
          font-size: x-large;
      }
      img.navbar-brand.fw-bold 
      {
          width: 17%;
          height: 93px;
      }
      button.btn.btn-success.btn-lg.mr-3 
      {
          margin-right: 16px;
      }
ul.navbar-nav.me-auto.mb-2.mb-lg-0 
      {
          margin: 0 25px;
          font-size: x-large;
      }
      img.navbar-brand.fw-bold 
      {
          width: 17%;
          height: 93px;
      }
      button.btn.btn-success.btn-lg.mr-3 
      {
          margin-right: 16px;
      }
          li.nav-item {
    margin-right: 35px;
      }
      div#graphic 
      {
          padding-top: 7px;
      }
      a.btn.btn-primary 
      {
          margin: 0 53px;
      }
     
        h1.card-title {
    font-style: italic;
    text-decoration: overline;
}
      address 
      {
          font-size: 16px;
          font-style: initial;
          font-weight: revert;
          color: white;
      }
      .main
      {
        display: flex;
        justify-content: left;
        align-items: center;
        position: relative;
        width: 100wv;
        height: 40rem;
        color: #fff;
      }
      .vedio1
      {
        position: absolute;
        z-index: -2;
        object-fit: cover;
        width: 100%;
        height: 40rem;
      }
      h1#query 
      {
          font-style: italic;
          color: #4ef7e0;
      }
      a#b1 {
    color: black;
}
    </style>
  <body style="background-color: #c0d9d938;" >
    <!-- WebPage Preloader start-part-kv -->
    <div id="loader">
      <img src="img/final.gif" id="preloader" alt="Loading"/>
    </div>
    <!-- WebPage Preloader End-Part-kv-->
    <!-- Bootstrap5 navbar start -kv -->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #adadad">
        <div class="container-fluid">
          <img src="img/vm.jpg" class="navbar-brand fw-bold" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active" >
                  <a class="nav-link " aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <button class="btn btn-success btn-lg mr-3"><a href="login.php" style="text-decoration:none;color: black;">Login</a></button>
          <button class="btn btn-primary btn-lg mr-3"><a href="register.php" style="text-decoration:none;color: black;">Register</a></button>
          </div>
        </div>
      </nav>
    <!-- Bootstrap5 navbar stop-kv -->
    <!-- video star-kv -->
        <div class="main_video main">
          <video autoplay loop muted  class="vedio1" src="img/nature1.mp4" width="100%" height="50%"></video>
          <div>
            <h1 style="padding-left: 30px;" id="query">YOU WANT SOME QUERIES?</h1>
            <h3 style="padding-left: 30px;">ASKING OUR COMPANY</h3>
            <button class="btn btn-info mx-4 my-3 btn-lg "><a href="contact.php" style="text-decoration: none;">ENQUIRY NOW!</a></button>
          </div>
      </div>
    <!--  video end-kv-->
    <!-- Our srvices Cards using bootstrap5 star-kv -->
    <div class="container">
      <h1 class="card-title" style="text-align: center;">OUR SERVICES</h1><hr>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/webimage2.png" class="card-img-top" alt="img">
              <div class="card-body">
                <h5 class="card-title">WEB DEVELOPMENT</h5>
                <p class="card-text">Web development refers to the creating, building, and maintaining of websites.</p><br>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/webdesign.jpg" class="card-img-top" alt="img">
              <div class="card-body">
                <h5 class="card-title">WEB DESIGNING</h5>
                <p class="card-text">Web design is refers to the design of websites that are displayed on the internet</p><br>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/seo1.jpg" class="card-img-top" alt="img">
              <div class="card-body">
                <h5 class="card-title">SEO PROJECTS</h5>
                <p class="card-text"> Search Engine Optimization and is the process used to optimize a website's technical configuration</p>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card " style="width: 18rem;">
              <img src="img/digital.jpg" class="card-img-top  hover-zoom" alt="img">
              <div class="card-body">
                <h5 class="card-title">DIGITAL MARKETING </h5>
                <p class="card-text"> Digital marketing comes with various challenges, including implicit bias.</p>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
        </div>
      </div><br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
             <div class="card" id="graphic" style="width: 18rem;">
              <img src="img/graphic.jpg" class="card-img-top" alt="img">
              <div class="card-body">
                <h5 class="card-title">GRAPHIC DESIGNING</h5>
                <p class="card-text">The art or skill of combining text and pictures in advertisements, magazines</p><br>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
             <div class="card" style="width: 18rem;">
              <img src="img/ui.jpg" class="card-img-top" alt="img">
              <div class="card-body">
                <h5 class="card-title">UI/UX DESIGNING</h5>
                <p class="card-text">Web design is refers to the design of websites that are displayed on the internet</p><br>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
             <div class="card" style="width: 18rem;">
              <img src="img/data.jpg" class="card-img-top" alt="img">
              <div class="card-body">
                <h5 class="card-title">DATABASE MANAGEMENT</h5>
                <p class="card-text"> A database is a collection of data stored in a computer in a way that makes it easy to obtain. </p><br>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
             <div class="card " style="width: 18rem;">
              <img src="img/mobile.jpg" class="card-img-top  hover-zoom" alt="img">
              <div class="card-body">
                <h5 class="card-title">MOBILE APP DEVELOPMENT</h5>
                <p class="card-text"> Mobile application development is the process of making software for smartphones</p>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <br>
        <div class="container">
        <h1 class="card-title" style="text-align: center;">OUR PARTNERS</h1><hr>
        <div class="row">
        <div class="col-md-2">
          <img src="img/amazon.png" alt="logo" width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/logo1.png" alt="logo" width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/google..jpg" alt="logo" width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/youtube.png" alt="logo" width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/snap.png" alt="logo"  width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/insta.jpg" alt="logo" width="100px" height="50px">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-2">
          <img src="img/whatsapp.jpg" alt="logo" width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/fb.jpg" alt="logo" width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/twitter.jpg" alt="logo" width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/gpay.png" alt="logo" width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/phonepay.png" alt="logo"  width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <img src="img/true.png" alt="logo" width="100px" height="50px">
        </div>
      </div>
      </div>
      <br><br>
      <div class="container-fluid"  style="background-image: url('img/imgback7.jpg'); background-repeat: no-repeat;background-size: cover;"><br>
              <div class="row">
                <div class="col-md-5">
                  <h3 style=" color: white;padding: 0 151px;"><b>Our History</b></h3><br>
                  <p class="para2" style="text-transform: none;font-size: large;font-style: oblique;font-family: auto;color: white;padding: 0 22px;">Super Traders is an organization that was started in 1997 by Mr.Haji Saleem Sharif( Popat ) to serve the market with the best of grocery products at very reasonable rates. Super traders now deal in over 1000+ SKUs and have everything a household will need in terms of Grocery products and source these directly from the farmers at the APMC. Thereby ensuring the genuine quality of products sourced.<br><br>
                  A trusted product of purity and quality. All kinds of food grains, spices, dry fruits and flour products are available. S T Products are sourced from the finest farms and processed at the state of art facilities. They strive to continually raise our benchmark to provide services of the highest quality and excellence. The products guarantee fresh and high quality in each and every pack.</p>
                </div>
                <div class="col-md-3"><br><br><br><br>
                  <img src="img/vm.jpg" width="60%" height="20%">
                  <h3 style=" color: white;padding: 0 10px;">Stay In Touch</h3>
                  <address>
                    SUPER TRADERS<br>
                    #185/19/1, 6th Main,<br>
                    APMC Yard, Chennai,<br>
                    Tamilnadu – 560022<br>
                    Phone: 9597338424<br>
                    supertraders2023st@gmail.com<br>
                  </address>
                </div>
                <div class="col-md-4"><br><br>
                  <img src="img/img2.jpg" class="img-responsive"width="100%" height="80%" >
                </div>
              </div>
            </div>
          </div>
      <div class="container-fluid" style="background-color:#ddefe808;"> 
              <footer  style="text-align: center;\color: black;">@All Rights Reserved | Managed By-<i>vengat</i>Terms & Conditions</footer>
            </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
      		$('#loader').delay(3000).fadeOut("showBodyPart");
      		function showBodyPart(){
      			$('#body_parts').fadeIn(100);
      		}
      	})
         
       </script>
  </body>
</html>