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

    <!--EDIT FORM-->
    <div class="container-fluid mt-5 ">
        <div class="row h-50">
            <div class="col-md-4 col-lg-6 col-sm-9 col-9 m-auto bgform">

                <form action="https://localhost/MVC/home/editpro" method="post" enctype="multipart/form-data">
                    <div id="maildiv" class="form-group mt-5">
                        <label for="exampleInputEmail1">Email address :</label>
                        <input id="mail "type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $data[0]; ?>">
                        <small id="emailHelp" class="form-text text-muted">Your email should not consist anything except numbers, dot (.), _ , @, letters.</small>
                    </div>
                    <br>
                    <br>
                    <small id="passHelp" class="form-text text-muted">Make sure your password is 6-50 characters long and consist only @, letters, numbers, _, - : </small>
                    <small id="passHelp1" class="form-text text-muted">We keep your password in hash form so don't worry too much either.</small>
                    <div id="passdiv" class="form-group">
                        <label for="exampleInputPassword1">Password :</label>
                        <input id="pass" type="text" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $data[1]; ?>">
                    </div>
                    <br>

                    
                    <br>
                    <br>
                    

                    <button id = "regist" type="submit" class="btn btn-primary  mb-4 formbtn">Submit</button>
                </form>

            </div>

        </div>
        
    </div>












    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

    <script src="<?php echo url; ?>/public/js/landing.js"></script>
    <script src="<?php echo url; ?>/public/js/edit.js"></script>
</body>
</html>