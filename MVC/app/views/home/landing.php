
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/landing.css">
    
    <link rel="stylesheet" href="<?php echo url;?>/public/css/landing.css">

    
</head>
<body>


    <?php if(isset($_GET['login']) && !empty($_GET['login']) && $_GET['login']=="success"){
        echo '<div class="container-fluid mt-0 mb-0 mgbtm">
                    <div class="row alert alert-success alert-dismissible fade show mb-0" role="alert">
                        <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1 x "><strong>Login Successful!</strong> Please continue browsing ... </div>
                        <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>';

    } ?>
    <?php if(isset($_GET['logout']) && !empty($_GET['logout']) && $_GET['logout']=="success"){
        echo '<div class="container-fluid mt-0 mb-0 mgbtm ">
                    <div class="row alert alert-success alert-dismissible fade show mb-0" role="alert">
                        <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1 x "><strong>Logout Successful!</strong> </div>
                        <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>';

    } ?>


    <?php if(isset($_GET['delete']) && !empty($_GET['delete']) && $_GET['delete']=="success"){
            echo '<div class="container-fluid mt-0 mb-0 mgbtm ">
                        <div class="row alert alert-success alert-dismissible fade show mb-0" role="alert">
                            <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1 x "><strong>Account Deletion Successful!</strong> Thanks for staying with us ...</div>
                            <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';

    } ?>


    <?php if(isset($_GET['delete']) && !empty($_GET['delete']) && $_GET['delete']=="fail"){
                echo '<div class="container-fluid mt-0 mb-0 mgbtm ">
                            <div class="row alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1 x "><strong>Account Deletion Failed!</strong> Please try again later ...</div>
                                <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';

    } ?>

    <?php if(isset($_GET['editid']) && !empty($_GET['editid']) && $_GET['editid']=="success"){
                    echo '<div class="container-fluid mt-0 mb-0 mgbtm ">
                                <div class="row alert alert-success alert-dismissible fade show mb-0" role="alert">
                                    <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1 x "><strong>Account Edited Successfully!</strong> Please continue browsing...</div>
                                    <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>';

    } ?>
    <?php if(isset($_GET['editid']) && !empty($_GET['editid']) && $_GET['editid']=="fail"){
                echo '<div class="container-fluid mt-0 mb-0 mgbtm ">
                            <div class="row alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1 x "><strong>Account Editing Failed!</strong> Please try again later ...</div>
                                <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';

    } ?>


    <!--NAVBAR-->
    <?php include 'navbar.php' ?>
    <!--navbar till here -->

    <!-- Carousel -->
    
    
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" data-interval="4000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./public/img/wp4.jpg" class="d-block w-100" >
                </div>
                <div class="carousel-item">
                    <img src="./public/img/wp5.jpg" class="d-block w-100" >
                </div>
                <div class="carousel-item">
                    <img src="./public/img/wp3.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container-fluid vw-100 vh-100 m-0 p-0  ">
            <div>
                <div class="row  ">
                    <div class="col-sm-12  ">
                        <p class="text">"Get the right people. Then no matter what all else you might do wrong after that, the people will save you. That’s what management is all about." ~ Tom DeMarco</p>
                    </div>    
                </div>



                <div class="row  ">
                    <div class="col-sm-12">
                        <img src="./public/img/bg.jpg" class="img-fluid">
                    </div>    
                </div>

                <div class="row  m-0 p-0 ">
                    
                    <canvas id="myChart1" ></canvas>
                
                
                    <canvas id="myChart2" ></canvas>
                   

                    

                </div>


            </div>
            <div class="container-fluid vw-100 bgcopy">
                    
                    <br>
                    <p >&copy;copyright law of samin arnob.</p>
            </div>



        </div>


    
    


    
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="<?php echo url; ?>/public/js/chart1.js"></script>
    <script src="<?php echo url; ?>/public/js/chart2.js"></script>
    
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

    <script src="<?php echo url; ?>/public/js/landing.js"></script>



       
</body>


</html>