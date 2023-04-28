<?php
?>


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
    
    <link rel="stylesheet" href="<?php echo url; ?>/public/css/landing.css">
    <link rel="stylesheet" href="<?php echo url; ?>/public/css/reg.css">
</head>
<body>
    <!--Navbar-->
    
    <?php include 'navbar.php' ?>

    
    
    <!--Navbar-->

    <?php 
        if($data =="true"){
            echo '<div class="container-fluid mt-1 ">
                        <div class="row alert alert-success alert-dismissible fade show" role="alert">
                            <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1"><strong>Registration Successful!</strong> Please log in the login page ...</div>
                            <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                  </div>';
                    
        }
    ?>
    <?php 
        if($data =="mail_exist"){
            echo '<div class="container-fluid mt-1 ">
                        <div class="row alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1"><strong>Registration Not Possible!</strong> user mail is already in use ...</div>
                            <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                  </div>';
                    
        }
    ?>

<?php 
        if($data =="false"){
            echo '<div class="container-fluid mt-1 ">
                        <div class="row alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1"><strong>Registration Not Possible!</strong> Something error occured! Try again later ...</div>
                            <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                  </div>';
                    
        }
    ?>

<?php 
        if($data =="dberror"){
            echo '<div class="container-fluid mt-1 ">
                        <div class="row alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="col-lg-11 col-sm-10 ms-sm-5 ms-xs-1"><strong>Registration Error!</strong> Database error occured due to net issues...</div>
                            <button type="button" class="col-lg-1 col-sm-1  order-12 regbtn" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                  </div>';
                    
        }
    ?>




    <!--form-->
    <div class="container-fluid mt-5 domin ">
        <div class="row h-50">
            <div class="col-md-4 col-lg-6 col-sm-9 col-9 m-auto bgform">

                <form action="https://localhost/MVC/home/regval" method="post" enctype="multipart/form-data">
                    <div id="maildiv" class="form-group mt-5">
                        <label for="exampleInputEmail1">Email address :</label>
                        <input id="mail "type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Your email should not consist anything except numbers, dot (.), _ , @, letters.</small>
                    </div>
                    <br>
                    <br>
                    <small id="passHelp" class="form-text text-muted">Make sure your password is 6-50 characters long and consist only @, letters, numbers, _, - : </small>
                    <small id="passHelp1" class="form-text text-muted">We keep your password in hash form so don't worry too much either.</small>
                    <div id="passdiv" class="form-group">
                        <label for="exampleInputPassword1">Password :</label>
                        <input id="pass" type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <br>
                    <small id="imgHelp" class="form-text text-muted">Please Insert your image in jpg < 1MB or else won't work :</small>
                    <div id="imgdiv" class="form-group">
                        
                        <input id="img" type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <br>
                    <br>
                    <br>
                    

                    <button id = "regist" type="submit" class="btn btn-primary  mb-4 formbtn">Submit</button>
                </form>

            </div>

        </div>
        
    </div>

    <!--form-->
    <div class="container-fluid vw-100 bgcopy">            
            <br>
            <p >&copy;copyright law of samin arnob.</p>
     </div>






    
    

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

    <script src="<?php echo url; ?>/public/js/landing.js"></script>
    <script src="<?php echo url; ?>/public/js/reg.js"></script>
    
    
</body>
</html>

