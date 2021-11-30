<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry</title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/eas.css">
</head>
<body>
    <?php require 'function.php';  ?>
    <?php require 'header.php';  ?>
        <div class="container "style="margin-top:90px" >
            <div class="row">
               <h4 class="text-center mt-3" style="color: #27ae60;"> Contact us for
               the next project.
              </h4>
               <h2 class="text-center" style="color:#0e328f;">...we make impression</h2>
            </div>
            <h4 class="text-center bg-dark m-3 py-3" style="color: #27ae60;">
            call us - 07086937413 , 08076771973</h4>
            </h4>
        </div>
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
                        style="border-radius: 15px;background: none;">
                </div>
                <div class="form-group col-lg-6 my-2">
                    <textarea type="text"  name="content" class="form-control" 
                    placeholder="HOW WE CAN HELP YOU" style="resize:none; height: 100px;
                      border-radius: 15px;background: none;"required></textarea>
                </div>
            </div>
            <center>
                <button class="mb-3 btn btn-success btn-sm col-sm " 
                style="border-radius: 10px;font-size: large;
                 width: 40%; margin-left:20px;">submit
                 </button>
            </center>
        </div>
   </form>
    </section>
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
                    <div class="carousel-item active p-3" style="background-color:black ;">
                        <h1 class="text-center mt-5" style="color:#0e328f; font-size:50px;font-weight: bolder;">
                            HEAD
                        </h1>
                        <p>
                            Skillful and Well Trained painters to handle the
                            installation of wallpapers and wall panel.We are
                            specialized in making
                            your home and place of work a beauty for
                            comfort and relaxation. We make an impression!!
                        </p>
                    </div>
                    <div class="carousel-item  p-3" style="background-color:black ;">
                        <h1 class="text-center mt-5" style="color:#0e328f; font-size:50px;font-weight: bolder;">
                            TOP
                        </h1>
                        <p>
                            Skillful and Well Trained painters to handle the
                            installation of wallpapers and wall panel.We are
                            specialized in making
                            your home and place of work a beauty for
                            comfort and relaxation. We make an impression!!!
                
                        </p>
                    </div>
                    <div class="carousel-item  p-3" style="background-color:black ;">
                        <h1 class="text-center mt-5" style="color:#0e328f; font-size:50px;font-weight: bolder;">
                            MAN
                        </h1>
                        <h4>
                            Skillful and Well Trained painters to handle the
                            installation of wallpapers and wall panel.We are
                            specialized in making
                            your home and place of work a beauty for
                            comfort and relaxation. We make an impression!!!
            
                        </h4>
                    </div>
                </div>
            </div>
     </div>
    <!--testimony ends-->
     <?php  require 'footer.php'; ?>            
</body>
</html>