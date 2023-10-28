<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/x-icon" href="img/v1.jpg" />
		<title>contact page</title>
		<link rel="stylesheet" href="css/contact.css">
	    <!-- This is Latest Bootstrap 5 -->
	      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Latest compiled JavaScript -->
	      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> 
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
  <style type="text/css">
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
     
    address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
    color: white;
}
  </style>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #adadad">
        <div class="container-fluid">
          <img src="img/vm.jpg" class="navbar-brand fw-bold" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
	    <div class="container" id="con">
	    	<h1 class="mt-5"style="text-align: center;">Contact Our Team</h1>
	    	<p style="text-align: center;"><b>We are eager to listen to your training requirements. Kindly complete the form below, and we will be in touch <br><span style="text-align: center">within 24 hours.</b><span></p>
	    </div>
	   	    	<section class="contact-page-sec" class="mb-1">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-map-marked"></i>
              </div>
              <div class="contact-info-text">
                <h2>Address</h2>
                <span>2/255,Karambakudi</span> 
                <span>Pudukkottai ,Tamilnadu</span> 
              </div>
            </div>            
          </div>          
        </div>          
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-info-text">
                <h2>E-mail</h2>
                <span>vengatestamilselvi@gmail.com</span> 
                <span>vengateshtech@gmail.com</span>
              </div>
            </div>            
          </div>                
        </div>                
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="contact-info-text">
                <h2>office time</h2>
                <span>Mon - fri  9:00 am - 7.00 pm</span>
                <span>sat - sun  Holiday</span>
              </div>
            </div>            
          </div>          
        </div>          
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="contact-page-form" method="post">
            <h2>Get in Touch</h2> 
            <form action="contact-mail.php" method="post">
              <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Your Name" name="name"/>
                </div>
              </div>  
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="email" placeholder="E-mail" name="email" required/>
                </div>
              </div>                              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Phone Number" name="phone"/>
                </div>
              </div>  
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Subject" name="subject"/>
                </div>
              </div>                
              <div class="col-md-12 message-input">
                <div class="single-input-field">
                  <textarea  placeholder="Write Your Message" name="message"></textarea>
                </div>
              </div>                                                
              <div class="single-input-fieldsbtn">
                <input type="submit" value="Send Now"/>
              </div>                          
            </div>
            </form>   
          </div>      
        </div>
        <div class="col-md-4">        
          <div class="contact-page-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1995503.1107678323!2d77.86331131266603!3d12.35161880106296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d12.9917976!2d80.0875775!4m5!1s0x3babf17d7cc41527%3A0xde3b47a8b813470!2svr%20softtech!3m2!1d11.679334299999999!2d78.12820409999999!5e0!3m2!1sen!2sin!4v1694149813660!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>          
        </div>        
      </div>
    </div>
  </section>

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
	</body>
</html>
