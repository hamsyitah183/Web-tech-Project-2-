<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="https://fki.ums.edu.my/fki/wp-content/uploads/sites/6/2019/12/cropped-cube-Fki-trans-32x32.png" sizes = "32 x 32">
    <meta name="description" content="KP22403 Project 1">
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap4">
    <meta name="author" content="Hamsyitah (BI20110033)">

    <!--Jquery and Bootstrap-->
     <!--Bootstrap things-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    
    <!--Style and JS-->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">
    

    

    <!--Font -->
    <link href="http://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

 
    <!-- css.gg -->
    <link href='https://css.gg/css' rel='stylesheet'>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- UNPKG -->
    <link href='https://unpkg.com/css.gg/icons/all.css' rel='stylesheet'>

    <!-- JSDelivr -->
    <link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" >
    <header >
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top r-nav nav-Color p-lg-3" id="navbarMiss">
                <a href="<//?php echo base_url()?>" class="navbar-brand">
                    <img src="http://fki.ums.edu.my/fki/wp-content/uploads/sites/6/2019/12/NewFKIums-600x78.png" height="40" class="d-inline-block align-top">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDrop" aria-controls="navDrop" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black">
                    <i class="fa-solid fa-bars"></i>
                </button>

               <?php include('C:\xampp\htdocs\MVC_BI20110033\application\views\template\navbar.php');?>
                
            
        </div>
        <!---linear-gradient(to left, #071823, #103245, #174e69, #1b6d8f, #198db7, #198db7, #198db7, #198db7, #1b6d8f, #174e69, #103245, #071823);"-->
        <section>
            <div class="headers fade-scroll" style=" background-image: linear-gradient(rgba(3, 3, 3, 0.5), rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1619102426818-356194d93fa8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');" >
                <div class="container text-center header-content fade-scroll" id = "welcome">
                    <div class="row">
                        <div class="col-lg-6 mt-md-5 mt-sm-6 mb-sm-0 firstSec " >
                            
                                <h1 class="text-nowrap text-center">WELCOME TO<br> Faculty of Computing <br>& Informatics<br>University Malaysia Sabah</h1>
                            
                        </div>
                        <div class="col-lg-6 col-sm-12 secondSec" >
                            <img src="https://www.ums.edu.my/pppg/images/UMS-Universiti-Malaysia-Sabah-.jpg.600x400_q85.jpg" class="img-fluid thumbnail images">
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </header>
    
    <!---Main section-->
    <main>
      <!--about-->
      <section class="section-1 py-2 text-white" id="abouts" style="background-image: linear-gradient(rgba(3, 3, 3, 0.8), rgba(78, 77, 77, 0.211)),url('https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');" >
        <div class="container ">
            <h1 style = "padding-left : 10px;">About Us</h1>
            <p style = "padding-left: 10px;">Profile</p>
            <div class="row">
                <div class="col-lg-10">
                    <image class = "image img-responsive col-lg-12" style = "display:flex; justify-content:center;" src = "https://www.ums.edu.my/v5/images/2021/landmarks/umsDC.jpg"></image>

                </div>
                <div class="col-lg-2">
                    <button class = "btn btn-primary black-btn text-white">
                        <a href="<?=base_url();?>welcome/about" style = "text-decoration:none; color:white">Read more</a>
                    </button>
                </div>
            </div>
            <div class="row">
                <p class="col-lg-12 firstText">
                            Faculty of Computing and Informatics (FCI) formerly known as 
                            Labuan School of Informatics Science (LSIS) was established in May 
                            1999, offering programmes in the field of computing and information technology. In October 2003 Universiti Malaysia Sabah was recognised by Multimedia Development Corporation (MDeC) for ICT- facilitated business that develop or use multimedia technologies to produce and enhance their 
                            products and services (quality graduates).
                </p>
        </div>
        </div>
      </section>  
     
      
        <!---undegraduate section-->
      <section class="section-2" id="#undergraduate">
          <div class="container mt-3 undergraduate-content">
              <h3 class="text-left ">Undergraduate Programmes</h3>
              <div class="undergraduate-text">
                <p class="justify-content text-left">
                    We ensures the provision of relevant, innovative, and excellent teaching and learning experiences at our faculty. 
                    This mandate emanates from UMS’s commitment to become one of the leading teaching and learning institutions in the region.
                  </p>
              </div>
              <div class="row">
                  <div class="col-lg-4 pb-sm-2 pb-xs-2">
                      <div class="card text-center">
                          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top">
                          <div class="card-body">
                              <h4 class="card-title">Software Engineering</h4>
                              <a href="course.html" class="btn black-btn">See More!</a>
                         </div>
                      </div>
                  </div>

                  <div class="col-lg-4 pb-sm-2 pb-xs-2">
                    <div class="card text-center">
                        <img src="https://images.pexels.com/photos/2881229/pexels-photo-2881229.jpeg?cs=srgb&dl=pexels-brett-sayles-2881229.jpg&fm=jpg" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Network Engineering</h4>
                            <a href="network.html" class="btn black-btn">See More!</a>
                       </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-sm-2 pb-xs-2">
                    <div class="card text-center">
                        <img src="https://images.pexels.com/photos/2599244/pexels-photo-2599244.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Data Science</h4>
                            <a href="data.html" class="btn black-btn">See More!</a>
                       </div>
                    </div>
                </div>
                
                <div class="col-lg-4 offset-lg-1 pt-lg-2 pb-sm-2 pb-xs-2">
                    <div class="card text-center">
                        <img src="https://images.pexels.com/photos/1029757/pexels-photo-1029757.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Multimedia Technology</h4>
                            <a href="multimedia.html" class="btn black-btn">See More!</a>
                       </div>
                    </div>
                </div>

                <div class="col-lg-4 offset-lg-1 pt-lg-2 pb-sm-2 pb-xs-2">
                    <div class="card text-center">
                        <img src="https://images.pexels.com/photos/8296974/pexels-photo-8296974.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Business Computing</h4>
                            <a href="business.html" class="btn black-btn">See More!</a>
                       </div>
                    </div>
                </div>
              </div>
          </div>
      </section>

      <section class="section-3" id="postgraduate" style="background-image: linear-gradient(rgba(135, 177, 213, 0.786), rgba(138, 147, 151, 0.174)),url('https://images.pexels.com/photos/4584830/pexels-photo-4584830.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
          <div class="container">
            <a href="postgraduate.html"><h3 class="text-left mb-1 " style="color:black">Postgraduate programmes</h3></a>
              <h6 class="text-center">Here at FCI, we offer you an outstanding professional Computer Science & Information Technology studies. Join and be a part of us.</h6>
            
               <div class="d-flex flex-sm-column  postgraduate">
                   <div class="row">
                    <div class=" first col-lg-4 mb-lg-3 mb-md-2">
                        <a href="http://fki.ums.edu.my/fki/wp-content/uploads/sites/6/2022/04/Doctor-of-Philosophy-Computer-Science.pdf" target="_blank">
                            
                            <h5 class="text-center ">Doctor of Philosophy (CS)</h5>
                        </a>
                       </div>
    
                       <div class="second col-lg-3 mb-lg-3 mb-md-2 offset-lg-1">
                        <a href="http://fki.ums.edu.my/fki/wp-content/uploads/sites/6/2022/04/Doctor-of-Philosophy-Information-Technology.pdf" target="_blank">
                            
                            <h5 class="text-center">Doctor of Philosophy (IT)</h5>
                        </a>
                       </div>
    
                       <div class="third col-lg-3 offset-lg-1 mb-lg-3 mb-md-2">
                        <a href="http://fki.ums.edu.my/fki/wp-content/uploads/sites/6/2022/04/Master-of-Science-Computer-Science-by-Research.pdf" target="_blank">
                            
                            <h5 class="text-center">Master of Science (Computer Science)</h5>
                        </a>
                       </div>
    
                       <div class="fourth col-lg-4 offset-lg-1 mb-md-2">
                        <a href="http://fki.ums.edu.my/fki/wp-content/uploads/sites/6/2022/04/Master-of-Science-Information-Technology-by-Research.pdf" target="_blank">
                            
                            <h5 class="text-center">Master of Science (Information Technology)</h5>
                        </a>
                       </div>
    
                       <div class="fifth col-lg-4 offset-lg-2 mb-md-2">
                        <a href="http://fki.ums.edu.my/fki/wp-content/uploads/sites/6/2022/04/Master-of-Computer-Science-Computational-Intelligence-by-Coursework.pdf" target="_blank">
                            
                            <h5 class="text-center">Master of Computer Science (Computational Intelligence)</h5>
                        </a>
                       </div>
                   </div>
               </div>
        </div>
      </section>

      <section class="map" id = "mapSection" style = "background-color : #354A54; padding-top: 40px; padding-bottom : 50px;">

    <div class="container">
       <h1 class="text-white">Direction</h1>
        <div class="row">
            <div class="col-lg-2">
                <ul class = "text-white text-left">
                    <li>88400 Kota Kinabalu, Sabah</li>
                    <li>Jalan UMS, 88400 Kota Kinabalu, Sabah</li>
                </ul>
            </div>
            <div class="col-lg-10">
                <div class="text-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.98097540894116!2d116.12193406783581!3d6.036443605330673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x323b6b7020cc3bf9%3A0x1c7bd63eab46aa26!2sFaculty%20Of%20Computing%20And%20Informatics%20(FCI)!5e0!3m2!1sen!2smy!4v1656166923362!5m2!1sen!2smy" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class = "col-lg-12"></iframe>

                </div>
            </div>
        </div>
    </div>
</section>
    </main>
