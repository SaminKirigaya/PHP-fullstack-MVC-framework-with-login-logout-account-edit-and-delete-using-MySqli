
<?php
    $image_path = '../app/userimg/'.$data[2];
    $image_type = mime_content_type($image_path);
    $image_data = file_get_contents($image_path);
    $image_data_uri = 'data:' . $image_type . ';base64,' . base64_encode($image_data);
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
    
    <link rel="stylesheet" href="<?php echo url;?>/public/css/landing.css">
    <link rel="stylesheet" href="<?php echo url;?>/public/css/profile.css">

</head>
<body>
    <!--Navbar-->
    <?php include 'navbar.php' ?>
    <!--Navbar-->
    <div class="container-fluid ">
        
            
        <div class="card cbody" >
            <img src="<?php echo $image_data_uri; ?>" class="card-img-top " alt="Img" >
            <div class="card-body ms-5 me-5">
                <p class="card-title"><b><?php echo 'Email:&nbsp;&nbsp;'.$data[0]; ?></b></p>
                <p class="card-text"><b><?php $val = explode('@', $data[0]); echo 'Username: &nbsp;&nbsp;'.$val[0] ?></b></p>
                <p class="card-text"><b>Password: &nbsp;&nbsp; ***********</b></p>
                <a href="https://localhost/MVC/home/editprofile" class="btn btn-primary cardbtn">Edit</a>
                <a href="https://localhost/MVC/home/delprofile" class="btn btn-primary cardbtn">Delete</a>
            </div>
        </div>   
                    


        
    </div>





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