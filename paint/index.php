<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/eas.css">
    <title>eascomfort</title>
</head>

<body>
    <?php require 'include/function.php';  ?>

<!--navbar start-->
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light"
        style="box-shadow: 0.5rem .5rem 0.5rem rgba(141, 136, 136, 0.9);">
       <div class="container">
            <a style="color: #27ae60;" href="#" class="h2 navbar-brand px-2"  style="color: #27ae60;">
                <img src="images/pix8.png" width="70" height="50" alt="">
                EASCOMFORT
            </a>
                <li class="text-sm">Call +234-7086937413</li>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target="#toggleMobileMenu"
                 aria-controls="toggleMobileMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav text-center px-3 h5 ms-auto">                
                    <li class="nav-item">
                        <a style="color: #27ae60;" href="include/about.php" 
                        class="nav-link new"  style="color: #0e328f">ABOUT
                        </a style="color: #27ae60;">
                    </li>
                    <li class="nav-item">
                        <a style="color: #27ae60;" href="#services"
                         class="nav-link new"  style="color: #0e328f">SERVICES
                         </a style="color: #27ae60;">
                    </li>
                    <li class="nav-item">
                        <a style="color: #27ae60;" href="include/request.php" 
                        class="nav-link new"  style="color: #0e328f">ENQUIRY
                        </a style="color: #27ae60;">
                    </li>
                    <li class="nav-item ">
                        <a style="color: #27ae60;" href="include/gallery.php" class="nav-link new"  style="color: #0e328f">GALLERY</a style="color: #27ae60;">
                    </li>
                </ul>
            
            </div>
            </div>
       </div>
    </nav>
    <!--navbar ends-->
    <!--carousel stat-->
    <div id="myCarousel" class="carousel slide mt-5"
     data-bs-ride="carousel"
     data-bs-interval="3000">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1">
            </li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2">
            </li>
        </ol>
        <div class="carousel-inner pt-5 px-3">
            <div class="carousel-item active p-3" style="background-image: url(images/ease2.jpg);">
                <h1 class="text-center mt-5"  style="color: #0e328f; font-size:50px;font-weight: bolder;">
                    EC PAINTS
                </h1>
                <div class="con text-center">
                    <h6>Fast <span> |</span></h6>
                    <h6>Reliable <span> |</span> </h6>
                    <h6 class="in">Affordable</h6>
                </div>
                <h6 class="text-center"  style="color: #0e328f;">Making A Lasting Impression With
                    A Touch Of Brush </h6>
                <div class="cat">
                    <h2 class="text-center">NEED A PRO PAINTER.....?</h2>
                    <center>
                        <a style="color: #27ae60;" href="include/request.php" class="text-center btn btn-info">CONTACT US</a style="color: #27ae60;">
                    </center>
                </div>
            </div>
            <div class="carousel-item  p-3" style="background-image: url(images/px15.jpg);">
                <h1 class="text-center mt-5"  style="color: #0e328f; font-size:50px;font-weight: bolder;">
                    EC PAINTS</h1>
                <div class="con text-center">
                    <h6>Fast <span> |</span></h6>
                    <h6>Reliable <span> |</span> </h6>
                    <h6 class="in">Affordable</h6>
                </div>
                <h6 class="text-center"  style="color: #0e328f;">Making A Lasting Impression With
                    A Touch Of Brush </h6>
                <div class="cat">
                    <h2 class="text-center">FOR CONSULTATION AND ESTIMATION.....?</h2>
                    <center>
                        <a style="color: #27ae60;" href="include/request.php" class="text-center btn btn-info">CONTACT US</a style="color: #27ae60;">
                    </center>
                </div>
            </div>
            <div class="carousel-item  p-3" style="background-image: url(images/wallpaper2.jpg);">
                <h1 class="text-center mt-5"  style="color:#0e328f; font-size:50px;font-weight: bolder;">
                    EC PAINTS
                </h1>
                <div class="con text-center">
                    <h6>Fast <span> |</span></h6>
                    <h6>Reliable <span> |</span> </h6>
                    <h6 class="in">Affordable</h6>
                </div>
                <h6 class="text-center"  style="color: #0e328f;">Making A Lasting Impression With
                    A Touch Of Brush </h6>
                <div class="cat">
                    <h2 class="text-center">
                        RESIDENTIAL AND COMMERCIAL PROJECTS.....?</h2>
                    <center>
                        <a style="color: #27ae60;" href="include/request.php" class="text-center ml-3 btn btn-info">CONTACT US</a style="color: #27ae60;">
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!--carousel ends-->
    <!--services start-->
    <section id="services" class="services">
        <h4 class="text-center" style="color: #27ae60;"> OUR SERVICES</h4>
        <h2 class="text-center" style="color:#0e328f;">what we offering</h2>
    
        <div class="container">
            <div class="row">
                <div class="col-sm col-md-6 col-lg-4">
                    <div class="card m-1 card-effect ">
                        <img src="images/exterior.jpg" height="150" class="card-img-top " alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center" style="color: #27ae60;">RESIDENTIAL PAINTING</h4>
                            <p class="card-text h6">
                                In Need of painters, who can professionally handle the interior of
                                your home? look no further, with ECpaints.We completely change the look
                                and feel of your private residence, with unique painting and always putting quality
                                first,with well estimation needed for big or small projects.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg-4">
                    <div class="card m-1 card-effect">
                        <img src="images/ease7.jpg" height="150" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center" style="color: #27ae60;">COMMERCIAL PAINTING</h4>
                            <p class="card-text h6">
                                ECpaints offers variety of services,Ranging from commercial,to residential.
                                We are always prepared,schools,restaurants,church,office and lot more.Rest
                                assured we can handle all aspect of interior & exterior painting with
                                Professionalism and Experience
                            </p>
    
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg-4">
                    <div class="card m-1 card-effect">
                        <img src="images/wallpaper1.jpg" height="150" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center" style="color: #27ae60;">WALLPAPER & WALL-PANELS</h4>
                            <p class="card-text h6">
                                Skillful and Well Trained painters to handle the installation of wallpapers
                                and wall panel.We are specialized in making your home and place of work a beauty
                                for comfort and relaxation. We make an impression!!!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services ends-->
    <!--about start-->
   <div class="container">
        <section class="row " id="about">
            <div class="col-lg-6 m-auto"><img src="images/ease12.jpg" alt="" width="100% auto"></div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="" style="color: #27ae60;">ABOUT ECpaints</h5>
                            <h2 class="" style="color:#0e328f;">why choose us</h2>
                            <p class="ch4">
                                We strive for a very quick response time! No matter what painting job
                                is needed, big or small, our estimators will
                                prepare fast accurate quotes to meet your specific needs.
                                <a style="color: #27ae60;" href="include/about.php"
                                    class="btn btn-sm btn-outline-secondary">MORE</a>
                            </p>
                        </div>
                        <div class="d-flex col-sm-6 px-2">
                            <button class="btn btn-success mx-1 mt-3">Quality Guaranteed</button>
                            <button class="btn btn-success mx-1 mt-3">On Time, On Budget</button>
        
                        </div>
                        <div class="d-flex col-sm-6 px-2">
                            <button class="btn btn-success mx-1 mt-2">24/7 Service</button>
                            <button class="btn btn-success mx-1 mt-2">Experience And Professionalism</button>
        
                        </div>
        
                    </div>
                </div>
            </div>
   </div>
    </section>
    <!--about ends-->
<!--enquiry-->
    <section class="enquiry">
        <form action="" method="post">
            <h4 class="text-center mt-3" style="color: #27ae60;"> ENQUIRY</h4>
        <h2 class="text-center" style="color:#0e328f;">for quick estimation</h2>
        <div class="container-fluid m-1 justify-content-center ">
               <p class="text-center py-3 bg-dark text-white">
                     *Fill in require field below
                      and we will contact you within an *hour* to discuss your requirement
                 </p>
            <div class="row mx-2 ">
                <div class="form-group justify-content-center col-lg-6 my-2">
                    <input type="text" name="name" class="form-control" placeholder="NAME"
                        style="border-radius: 15px; background: none;" required>
                </div>
                <div class="form-group col-lg-6 my-2">
                    <input type="email"  name="email" class="form-control " 
                    placeholder="EMAIL"
                        style="border-radius: 15px; background: none;"required>
                </div>
                <div class="form-group col-lg-6 my-2">
                    <input type="text"  name="phone" class="form-control" 
                    placeholder="PHONE"
                        style="border-radius: 15px; background: none;"required>
                </div>
                <div class="form-group col-lg-6 my-2">
                    <textarea type="text"  name="address" class="form-control"
                     placeholder="ADDRESS"
                        style="border-radius : 15px;resize:none; height:50px;background: none;"required></textarea>
                </div>
                 <div class="form-group col-lg-6 my-2">
                     <center>
                          <label for="" class="form-label">SCHEDULE DATE with us</label>     
                     </center>
                    <input type="date"  name="date" class="form-control"
                     placeholder="SCHEDULE TIME/DATE"
                        style="border-radius: 15px;background: none;"required>
                </div>
                <div class="form-group col-lg-6 my-2">
                    <textarea type="text"  name="content" class="form-control" 
                    placeholder="HOW WE CAN HELP YOU" style="resize:none; height: 100px;
                      border-radius: 15px;background: none;"required></textarea>
                </div>
            </div>
            <center>
                <button class="mb-3 btn btn-success btn-sm col-sm " style="border-radius: 10px;font-size: large;
                 width: 40%; margin-left:20px;">submit
                 </button>
            </center>
        </div>
   </form>
    </section>
    <!--gallery-->
    <section class="container">
        <h5 class="text-center" style="color: #0e328f;">
            GALLERY
        </h5>
        <h2 class="text-center" style="color: #27ae60;">our recent works</h2>
        <div class="row col p-4">
            <div class ="col-sm-6 col-md-4 col-lg-3 pb-4">
                <img  src="images/outside1.jpg" width="100%" height="150px" alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 pb-4">
                <img  src="images/outside4.jpg" width="100%" height="150px"  alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 pb-4">
                <img src="images/wallpaper2.jpg" width="100%" height="150px"  alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 pb-4">
                <img src="images/px11.jpg" width="100%"  height="150px" alt="">
            </div>
            <center>
                <a href="include/gallery.php" class="btn btn-outline-secondary">view more</a>
            </center>
        </div>
    </section>
    <!--gallery ends-->
    <!--testimony-->
     <div class="container">
            <div id="myCarousel" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="3000">
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1">
                    </li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2">
                    </li>
                </ol>
                <div class="carousel-inner pt-1 p-5">
                    <div class="carousel-item active p-3"
                     style="background-color:black ;">
                        <h3 class="text-center mt-5" style="color:#0e328f; font-size:50px;font-weight: bolder;">
                            1
                        </h3>
                        <h5>
                            Skillful and Well Trained painters to handle the
                            installation of wallpapers and wall panel.We are
                            specialized in making
                            your home and place of work a beauty for
                            comfort and relaxation. We make an impression!!
                        </h5>
                        <div class="text-center mt-3">
                            - David,Charles
                        </div>
                    </div>
                    <div class="carousel-item  p-3"
                     style="background-color:black ;">
                        <h3 class="text-center mt-5" style="color:#0e328f; font-size:50px;font-weight: bolder;">
                            2
                        </h3>
                        <h5>
                            Skillful and Well Trained painters to handle the
                            installation of wallpapers and wall panel.We are
                            specialized in making
                            your home and place of work a beauty for
                            comfort and relaxation. We make an impression!!!
                
                        </h5>
                        <div class="text-center mt-3">
                            - David,Charles
                        </div>
                    </div>
                    <div class="carousel-item  p-3"
                     style="background-color:black ;">
                        <h3 class="text-center mt-5"
                         style="color:#0e328f; 
                         font-size:50px;font-weight: bolder;">
                            3
                        </h3>
                        <h5>
                            Skillful and Well Trained painters to handle the
                            installation of wallpapers and wall panel.We are
                            specialized in making
                            your home and place of work a beauty for
                            comfort and relaxation. We make an impression!!!
            
                        </h5>
                        <div class="text-center mt-3">
                            - David,Charles
                        </div>
                    </div>
                    <div class="carousel-item  p-3" style="background-color:black ;">
                        <h3 class="text-center mt-5" style="color:#0e328f; 
                         font-size:50px;font-weight: bolder;">
                            4
                        </h3>
                        <h5>
                            Skillful and Well Trained painters to handle the
                            installation of wallpapers and wall panel.We are
                            specialized in making
                            your home and place of work a beauty for
                            comfort and relaxation. We make an impression!!!
                    
                        </h5>
                        <div class="text-center mt-3">
                            - David,Charles
                        </div>
                    </div>
                    <div class="carousel-item  p-3" style="background-color:black ;">
                        <h3 class="text-center mt-5" style="color:#0e328f; 
                             font-size:50px;font-weight: bolder;">
                          5
                        </h3>
                        <h5>
                            Skillful and Well Trained painters to handle the
                            installation of wallpapers and wall panel.We are
                            specialized in making
                            your home and place of work a beauty for
                            comfort and relaxation. We make an impression!!!
                    
                        </h5>
                        <div class="text-center mt-3">
                            - David,Charles
                        </div>
                    </div>
                </div>
            </div>
     </div>
    <!--testimony ends-->
   <footer class="bg-dark text-white mx-3 mb-4">
       <div class="footer-top mb-1">
          <div class="container">
               <div class="row">
                   <div class="col-md-4 mb-3 text-center">
                       <h5 class="text-uppercase  mt-2">eascomfort</h5>
                       <h6>......making an Impression</h6>
                   </div>
                  <div class="col-md-2 text-center txt mt-3">
                       <h2 style="color: #0e328f;">CONTACT INFO</h2>
                       <h6 class="mx-3"  style="color: #27ae60;">
                           Address: Road 3 Omolayo Akobo,ibadan
                           Oyo State.
                       </h6>
                       <h6  style="color: #27ae60;">Email: eas@gmail.com.
                       </h6  style="color: #27ae60;">
                        <h6 style="color: #27ae60;">Phone: 07086937413, 08076771973.
                        </h6>
                  </div>
                    <div class="col-md-2 text-center txt mt-3">
                        <h2 style="color: #0e328f;">SOCIAL MEDIA</h2>
                        <ul>
                            <li><a style="color: #27ae60;" href="#">Facebook</a style="color: #27ae60;"></li>
                            <li><a style="color: #27ae60;" href="#">Twitter</a style="color: #27ae60;"></li>
                            <li><a style="color: #27ae60;"  href="#">Instagram</a style="color: #27ae60;"></li>
                            <li><a style="color: #27ae60;" href="#">Whatsapp</a style="color: #27ae60;"></li>

                        </ul>
                    </div>
                    <div class="col-md-2 text-center txt mt-3">
                        <h2 style="color: #0e328f;">QUICK LINK</h2>
                        <ul>
                            <li><a style="color: #27ae60;" href="#about">About</a style="color: #27ae60;"></li>
                            <li><a style="color: #27ae60;" href="#services">Services</a style="color: #27ae60;"></li>
                            <li><a style="color: #27ae60;" href="#enquiry">Enquiry</a style="color: #27ae60;"></li>
                            <li><a style="color: #27ae60;" href="#review">Review</a style="color: #27ae60;"></li>
                        
                        </ul>
                    </div>
               </div>
           </div>
       </div><hr style="color:#fff;">
       <div class="text-center pb-3"  style="color:#0e328f;">Copyright @ 2021 By <span  style="color: #27ae60;"  > Holztech</span></div>
   </footer>

    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>