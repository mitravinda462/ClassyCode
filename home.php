 <?php
 session_start();
 if(!isset($_SESSION['username'])){
     header('location:login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>il Modella</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="logoim2.jpg" id="titlelogo" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran|Righteous&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
<!--html files-->
<!-- <link href="devika/login.html"> -->
</head>
<script>
function cart1()
                {
                  var a=document.getElementById("m_s_f_1").innerHTML
                   window.alert("Item added to cart");
                  localStorage.setItem( 'objectToPass1',a);

                }  
                
                function cart2()
                {
                  var a=document.getElementById("m_s_f_2").innerHTML
                   window.alert("Item added to cart");
                  localStorage.setItem( 'objectToPass2',a);

                }  
                
                function cart3()
                {
                  var a=document.getElementById("m_s_f_3").innerHTML
                   window.alert("Item added to cart");
                  localStorage.setItem( 'objectToPass3',a);

                }  
               
                function cart4()
                {
                  var a=document.getElementById("m_s_f_4").innerHTML
                   window.alert("Item added to cart");
                  localStorage.setItem( 'objectToPass4',a);

                }
                
                 }  
                function a1(){ 
                var x=$(".w_1").attr("id");
                
                localStorage.setItem("id",x);
                
              }
                            function a2(){
                var y=$(".w_2").attr("id");
                
                          alert("in function");
                localStorage.setItem("id",y);
                alert(y);
                
              }
                            function a3()
                            {
                var z=$(".w_3").attr("id");
                alert(z);
              
                localStorage.setItem("id",z);
               
                            }
                            function a4()
                            {
                var a=$(".w_4").attr("id");
                alert(a);
                localStorage.setItem("id",a);
                
                            }
                            function a5(){
                var e=$(".w_5").attr("id");
                
                localStorage.setItem("id",e);
                
              }
                            function a6(){
                var f=$(".w_6").attr("id");
                
                          alert("in function");
                localStorage.setItem("id",f);
                alert(f);
                
              }
                            function a7()
                            {
                var g=$(".w_7").attr("id");
                alert(g);
              
                localStorage.setItem("id",g);
               
                            }
                            function a8()
                            {
                var h=$(".w_8").attr("id");
                alert(h);
                localStorage.setItem("id",h);
                
                            }
                

          

                      
         

  
            

                  
 




        

  </script>
<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1>
          <img src="logoim2.jpg" id="imicon" width ="40px" height ="40px" style="border-radius:23px;"/>
          <a href="#intro" class="scrollto">il Modella</a>
        </h1>
    
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
                <!-- <li><input class="form-control" id="search" style="width:500px; height:35px;font-size:16px;" type="text" placeholder="Search for collections, products , brands and more.." aria-label="Search"></li> -->
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Trial Room</a></li>
          <li >
            <a class="login-trigger" href="http://localhost/prof.html" >Profile</a></li>
          <li><a class="signUp-trigger" href="http://localhost/bill_dev.html" >Cart</a></li>
        
          
         
          <li><a href="logout.php">Logout</a></li>
          
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#introCarousel" data-slide-to="0" class=""></li>
          <li data-target="#introCarousel" data-slide-to="1" class=""></li>
          <li data-target="#introCarousel" data-slide-to="2" class=""></li>
          <li data-target="#introCarousel" data-slide-to="3" class=""></li>
        </ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/sale/denimsale.jpg" alt=""></div>
            
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/sale/sale2.jpg" alt=""></div>
            
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/sale/sale3.jpg" alt=""></div>
            
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/sale/sales4.jpg" alt=""></div>
            
          </div>

          

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    

   
    
    
  
    
    <!--==========================
      Collection Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Collections</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              
                    <div style="background-color: white;border-width:2px;border-style:solid;border-color: pink;border-radius:25px;">
                            <li data-filter=".filter-m">Men's Fashion</li>
                        <li data-filter=".filter-mform">Formals and Suits</li>
                        <li data-filter=".filter-tr">Trousers</li>
                        <li data-filter=".filter-ts">T Shirts</li>
                        <li data-filter=".filter-j">Jackets</li>
                      </div>
                      <div  style="background-color: white;border-width:2px;border-style:solid;border-color: pink;border-radius:25px;">
                          <li data-filter=".filter-wm">Women's Fashion</li>
                        <li data-filter=".filter-wform">Formals</li>
                
                        <li data-filter=".filter-tp">Tops</li>
                        <li data-filter=".filter-cas">Casuals</li>
                        <li data-filter=".filter-dress">Dresses</li>
                      </div>
          </div>
        </div>

        <div class="row portfolio-container">
<!-- men formals -->
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_f_1.png" width="300px" class="img-fluid" alt="">
                <a  href="trialroom.html" data-title="App 1" onclick="a1()" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="" class="link-details" title="More Details" onclick="cart1()"><i class=" ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_f_1</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i><b class="w_1" id="m_s_f_1">1299</b></a></p>
                  </div>
              
            </div>
          </div>
          


          <div class="col-lg-3 col-md-6 portfolio-item  filter-m filter-mform wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_f_2.png" width="300px"  class="img-fluid" alt="">
                <a href="trialroom.html" class="link-preview"  onclick="a2()" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="" class="link-details" title="More Details" onclick="cart2()"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_f_2</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_2" id="m_s_f_2">2299</b></p>
                  </div>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_f_3.png" width="300px" class="img-fluid" alt="">
                <a  href="trialroom.html" class="link-preview" onclick="a3()"  data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="" class="link-details" title="More Details" onclick="cart3()"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_f_3</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_3" id="m_s_f_3">2999</b></p>
                  </div>
              
            </div>
          </div>
          

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_f_4.png" width="300px"  class="img-fluid" alt="">
                <a href="trialroom.html" class="link-preview" onclick="a4()" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a  href="" class="link-details" title="More Details" onclick="cart4()"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_f_4</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_4" id="m_s_f_4">1299</b></p>
                  </div>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_f_1.png" width="300px" class="img-fluid" alt="">
                <a  class="link-preview"  data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_f_1</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_5" id="m_m_f_1">2299</b></p>
                  </div>
             
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_f_2.png"width="300px"  class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class="ion-ios-cart"></i>2299</a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_f_2</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_6" id="m_m_f_2">1299</b></p>
                  </div>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_f_3.png" width="400px"  class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_f_3</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_7" id="m_m_f_3">1999</b></p>
                  </div>
              
            </div>
          </div>
         
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_f_4.png" width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_f_4</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_8" id="m_m_f_4">1299</b></p>
                  </div>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_f_1.png" width="300px" class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_f_1</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_9" id="m_l_f_1">1599</b></p>
                  </div>
             
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_f_2.png"width="300px"  class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class="ion-ios-cart"></i>2299</a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_f_2</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_10" id="m_l_f_2">2299</b></p>
                  </div>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_f_3.png" width="400px"  class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_f_3</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_11" id="m_l_f_3">1299</b></p>
                  </div>
              
            </div>
          </div>
         

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-mform wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_f_4.png" width="300px"  class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_f_4</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_12" id="m_l_f_4">3299</b></p>
                  </div>
              
            </div>
          </div>
         

          <!--Trousers-->
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_t_1.png" width="300px" class="img-fluid" alt="">
                <a  data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class=" ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_t_1</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i><b class="w_13" id="m_s_t_1">1209</b></a></p>
                  </div>
              
            </div>
          </div>
          

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_t_2.png" width="300px"  class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_t_2</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_14" id="m_s_t_2">1799</b></p>
                  </div>
              
            </div>
          </div>
          

        
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_t_3.png" width="300px" class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_t_3</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_15" id="m_s_t_3">1279</b></p>
                  </div>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_f_4.png" width="300px"  class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_t_4</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_16" id="m_s_t_4">1299</b></p>
                  </div>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_t_1.png" width="300px" class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_t_1</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_17" id="m_m_t_1">1299</b></p>
                  </div>
             
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_t_2.png"width="300px"  class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a class="link-details" title="More Details"><i class="ion-ios-cart"></i>2299</a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_t_2</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_18" id="m_m_t_2">1200</b></p>
                  </div>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_t_3.png" width="400px"  class="img-fluid" alt="">
                <a class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a  class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_t_3</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_19" id="m_m_t_3">1199</b></p>
                  </div>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_t_4.png" width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_t_4</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_20" id="m_m_t_4">1299</b></p>
                  </div>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_t_1.png" width="300px" class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_t_1</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_1" id="m_s_f_1">1299</b></p>
                  </div>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_t_2.png"width="300px"  class="img-fluid" alt="">
                <a  class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i>2299</a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_t_2</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_1"  id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item  filter-m filter-tr wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_t_3.png" width="400px"  class="img-fluid" alt="">
                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_t_3</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_1" id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-tr wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_t_4.png" width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_t_4</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_1" id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>
          <!--T shirts-->
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-ts wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_ts_1.png" width="300px" class="img-fluid" alt="">
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class=" ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_ts_1</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i><b id="cloth1">1299</b></a></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-ts wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_ts_2.png" width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_ts_2</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_1" id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-ts wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_ts_1.png" width="300px" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_ts_1</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_1" id="m_s_f_1">1299</b></p>
                  </div>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-ts wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_ts_2.png"width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i>2299</a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_ts_2</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_1" id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-ts wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_ts_1.png" width="300px" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_ts_1</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-ts wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_ts_2.png"width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i>2299</a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_ts_2</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

         

       
       
      <!-- jackets -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_j_1.png" width="300px" class="img-fluid" alt="">
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class=" ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_j_1</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i><b id="cloth1">1299</b></a></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_j_2.png" width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_j_2</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_j_3.png" width="300px" class="img-fluid" alt="">
                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_j_3</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_s_j_4.png" width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_s_j_4</a></h4>
                   <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_j_1.png" width="300px" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_j_1</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_j_2.png"width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i>2299</a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_j_2</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_j_3.png" width="400px"  class="img-fluid" alt="">
                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_j_3</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_m_j_4.png" width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_m_j_4</a></h4>
                   <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_j_1.png" width="300px" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_j_1</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_j_2.png"width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i>2299</a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_j_2</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_j_3.png" width="400px"  class="img-fluid" alt="">
                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_j_3</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-m filter-j wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/m_l_j_4.png" width="300px"  class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
              </figure>
              <div class="portfolio1-info">
                    <h4><a href="#">ID : m_l_j_4</a></h4>
                   <p>Sizes :L  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="m_s_f_1">1299</b></p>
                  </div>
              
            </div>
          </div>

          <!--women collections-->
          <!-- wform -->
          <div class="col-lg-3 col-md-6 portfolio-item filter-wm filter-wform wow fadeInUp">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_s_f_1.png" width="300px" class="img-fluid" alt="">
                    <a  data-title="App 1" class="link-preview" onclick="a5()" title="Preview"><i class="ion ion-eye"></i></a>
                    <a   href=""class="link-details"  title="More Details"  onclick="cart5()"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_s_f_1</a></h4>
                       <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_5" id="w_s_f_1">1399</b></p>
                      </div>
                  
                </div>
              </div>
              <script>
                function cart5()
                {
                  var a=document.getElementById("w_s_f_1").innerHTML
                   window.alert("Item added to cart");
                  localStorage.setItem( 'objectToPass5',a);

                } 
              </script>
    
              <div class="col-lg-3 col-md-6 portfolio-item filter-wm filter-wform wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_m_f_2.png" width="300px"  class="img-fluid" alt="">
                    <a  class="link-preview"  data-title="Web 3" onclick="a6()"  title="Preview"><i class="ion ion-eye"></i></a>
                    <a href=""  class="link-details" title="More Details" onclick="cart6()"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_m_f_2</a></h4>
                       <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_6" id="w_m_f_2">1299</b></p>
                      </div>
                  
                </div>
              </div>
              <script>
                function cart6()
                {
                  var a=document.getElementById("w_m_f_2").innerHTML
                   window.alert("Item added to cart");
                  localStorage.setItem( 'objectToPass6',a);

                } 
              </script>
    
              <div class="col-lg-3 col-md-6 portfolio-item filter-wm -wform wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_m_f_3.png" width="300px"  class="img-fluid" alt="">
                    <a  class="link-preview"  data-title="Web 3"  onclick="a7()"  title="Preview"><i class="ion ion-eye"></i></a>
                    <a href=""  class="link-details" title="More Details" onclick="cart7()"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_m_f_3</a></h4>
                       <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_7" id="w_m_f_3">1499</b></p>
                      </div>
                  
                </div>
              </div>

              <script>
                function cart7()
                {
                  var a=document.getElementById("w_m_f_3").innerHTML
                   window.alert("Item added to cart");
                  localStorage.setItem( 'objectToPass7',a);

                } 
              </script>
    
            
              <!--tops  -->
              <div class="col-lg-3 col-md-6 portfolio-item filter-wm filter-tp wow fadeInUp">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_s_t_3.png" width="300px" class="img-fluid" alt="">
                    <a  data-title="App 1" class="link-preview"  onclick="a8()"  title="Preview"><i class="ion ion-eye"></i></a>
                    <a href=""  class="link-details" title="More Details" onclick="cart8()"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_s_t_3</a></h4>
                       <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b class="w_8" id="w_s_t_3">1599</b></p>
                      </div>
                  
                </div>
              </div>

              <script>
                function cart8()
                {
                  var a=document.getElementById("w_s_t_3").innerHTML
                   window.alert("Item added to cart");
                  localStorage.setItem( 'objectToPass8',a);

                } 
              </script>
    
              <div class="col-lg-3 col-md-6 portfolio-item .filter-wm filter-tp wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_s_t_2.png" width="300px"  class="img-fluid" alt="">
                    <a  class="link-preview"  data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_s_t_2</a></h4>
                       <p>Sizes :S <br/><a> <i class="ion-ios-pricetag"></i></a><b id="w_s_t_2">1299</b></p>
                      </div>
                  
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 portfolio-item filter-wm filter-tp wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_m_t_1.png" width="300px"  class="img-fluid" alt="">
                    <a  class="link-preview"  data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_m_t_1</a></h4>
                       <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="w_m_t_1">3299</b></p>
                      </div>
                  
                </div>
              </div>
<!-- casuals -->
<div class="col-lg-3 col-md-6 portfolio-item filter-wm filter-cas wow fadeInUp">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_s_c_1.png" width="300px" class="img-fluid" alt="">
                    <a  data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                    <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_s_c_1</a></h4>
                       <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="w_s_c_1">1299</b></p>
                      </div>
                  
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 portfolio-item filter-wm filter-cas wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_s_c_3.png" width="300px"  class="img-fluid" alt="">
                    <a  class="link-preview"  data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_s_c_3</a></h4>
                       <p>Sizes :S <br/><a> <i class="ion-ios-pricetag"></i></a><b id="w_s_c_3">1299</b></p>
                      </div>
                  
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 portfolio-item filter-cas  filter-wm wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_m_c_1.png" width="300px"  class="img-fluid" alt="">
                    <a  class="link-preview"  data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_m_c_1</a></h4>
                       <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="w_m_c_1">3299</b></p>
                      </div>
                  
                </div>
              </div>
<!--dresses  -->
<div class="col-lg-3 col-md-6 portfolio-item filter-wm filter-dress wow fadeInUp">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_s_d_1.png" width="300px" class="img-fluid" alt="">
                    <a  data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                    <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_s_d_1</a></h4>
                       <p>Sizes :S  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="w_s_d_1">1299</b></p>
                      </div>
                  
                </div>
              </div>
    <!--
              <div class="col-lg-3 col-md-6 portfolio-item .filter-wm  filter-dress wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_s_d_2.png" width="300px"  class="img-fluid" alt="">
                    <a  class="link-preview"  data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_s_d_2</a></h4>
                       <p>Sizes :S <br/><a> <i class="ion-ios-pricetag"></i></a><b id="w_s_d_2">1299</b></p>
                      </div>
                  
                </div>
              </div>-->
    
              <div class="col-lg-3 col-md-6 portfolio-item  filter-wm filter-dress wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="img/w_m_d_1.png" width="300px"  class="img-fluid" alt="">
                    <a  class="link-preview"  data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a   class="link-details" title="More Details"><i class="ion-ios-cart"></i></a>
                  </figure>
                  <div class="portfolio1-info">
                        <h4><a href="#">ID : w_m_d_1</a></h4>
                       <p>Sizes :M  <br/><a> <i class="ion-ios-pricetag"></i></a><b id="w_m_d_1">3299</b></p>
                      </div>
                  
                </div>
              </div>           
                      
                      
                    
        
        </div>
    </div>       
</section><!-- collection close -->
    
  
    
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Reach out to il Modella's customer care at any hour!!We will always be at your servce.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>PES University<br/>
              100 Feet Ring Road, BSK III Stage, Bangalore - 560085</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+91 80 26722108">+91 80 26722108</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">ilmodella@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
             
              <h1>
                  <img src="logoim2.jpg" id="imicon" width ="40px" height ="40px" style="border-radius:23px;"/>
                  <a href="#intro" class="scrollto" style="color:white;">il Modella</a>
                </h1>
          
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
                PES University<br/>
                100 Feet Ring Road, BSK III Stage, Bangalore - 560085<br/>
              <strong>Phone:</strong> +91 80 26722108<br>
              <strong>Email:</strong> ilmodella@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>A good news to all the shopaholics and fashionistas!!<br/>Stay updated with new fashion trends and styles.<br/>
            Get up-to-date information on new collections, brands, sales, offers, gift vouchers and much more with il Modella's news letter!!<br/>Subscribe to grab these benefits!!</p>
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your e-mail id"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>il Modella</strong>. All Rights Reserved
      </div>
      <div class="credits">
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!--  Main Javascript File -->
  <script src="js/main.js"></script>
<!--login form-->
<div id="login" width="500px"  height="1000px" class="modal fade" role="dialog">
    <div class="modal-dialog">
      
      <div class="modal-content">
        <div class="modal-body">
          <button data-dismiss="modal" class="close">&times;</button>
          <h4 class="login_heading">Login</h4>
          <form>
            <input type="text"style="font-size:18px;" name="username" class="username form-control" placeholder="Username"/>
            <input type="password" style="font-size:18px;"name="password" class="password form-control" placeholder="Password"/>
            <input class="btn login" type="submit" width="30px"value="Login" /><br/><br/>
            
           <h4 style="color:white;"><input type="checkbox" name="checkbox" width="10px" style="margin-left:-10px ;" height="10px" />Remember Me<span style="margin-left:130px">
             <a style="color:white;" href="www.gmail.com">Forgot Password?</a></span></h4>
          <h4 style="color:white;text-align: center;" >Don't have a account?</h4>
          <input class="btn login" type="submit" width="30px"value="Sign Up" /><br/><br/>
          </form>
        </div>
      </div>
    </div>  
  </div>
<!--login form #-->
<!--sign up form-->
<div id="signUp" width="500px"  height="1000px" class="modal fade" role="dialog">
    <div class="modal-dialog">
      
      <div class="modal-content">
        <div class="modal-body">
          <button data-dismiss="modal" class="close">&times;</button>
          <h4 class="login_heading">Sign Up</h4>
          <form>
            <input type="text"style="font-size:18px;" name="username" class="username form-control" placeholder="Username"/>
            <input type="email" style="font-size:18px;" name="email" class="username form-control" placeholder="E-Mail"/>
            <input type="password" style="font-size:18px;"name="password" class="password form-control" placeholder="Password"/>
            <input type="password" style="font-size:18px;"name="password" class="password form-control" placeholder=" Confirm Password"/>
            <h4 style="color:white;"><input type="checkbox" name="checkbox" width="10px" style="margin-left:-15px"height="10px" />
              I have read and agree to the
               <span >
                <a style="color:blue;" href="#"><u>terms and conditions</u></a></span></h4>
            <input class="btn login" type="submit" width="30px"value="Sign Up" />
            <br/><br/><br/>
          <h4 style="color:white;" >Already have an account?</h4>
          <input class="btn login" type="submit" width="30px"value="Login " />
          </form>
        </div>
      </div>
    </div>  
  </div>
<!--sign up  form #-->

</div>

</body>
</html>
