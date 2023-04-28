<?php
class user
{   

    public $name;
    public $condition;
    public $retval;


    public function regindata($mail, $pass, $img_name,$img_tmp){
        include 'dump.php';
        if($con){

            $mailtest = "SELECT*FROM `users` WHERE `email`='$mail'";
            $testquery = mysqli_query($con, $mailtest);

            if (mysqli_num_rows($testquery)>0){

                $this->retval = "mail_exist";

            }
            else {
                $fileext = explode('.', $img_name);
                $ext = strtolower(end($fileext));

                $dp = explode('.', $mail);
                $dpname = $dp[0].'.'.$ext;

                $qur = "INSERT INTO `users` (`email`, `pass`, `img`) VALUES ('$mail', '$pass','$dpname')";
                $result = mysqli_query($con,$qur);
                if($result === true){
                    
                    $this->retval = "true";

                }
                elseif ($result === false) {
                    $this->retval = "false";
                }

            }




        }else{
            $this->retval = "dberror";

        }

        return $this->retval;




    }


    public function logindata ($mail, $pass){
        include 'dump.php';

        if($con){
            $mailtest = "SELECT*FROM `users` WHERE `email`='$mail' ";
            $result = mysqli_query($con, $mailtest);
            if (mysqli_num_rows($result)>0){
                $rows = mysqli_fetch_assoc($result);
                if($rows['pass']==$pass){
                    $_SESSION['id'] = $rows['slno'];
                    $_SESSION['user'] = $rows['email'];
                    $this->retval = "login_success";

                }else{
                    $this->retval = "login_failed";
                }
                
                
            
                

            }else{
                $this->retval = "login_failed";
            }

        }
        else{
            $this->retval = "dberror";
        }

        return $this->retval;

    }

    public function userdata($data){
        include 'dump.php';
        if($con){
            
            $id=$data;
            $query = "SELECT*FROM `users` WHERE `slno`='$id'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);
            $mail = $row['email'];
            $pass =  $row['pass'];
            $img = $row['img'];


            $this->retval = array($mail, $pass , $img );
            
        }
        else{
            $this->retval = "error";
        }

        return $this->retval;

    }

    public function delprofile($id){

        include 'dump.php';
        if($con){
            $query = "DELETE FROM `users` WHERE `slno`='$id'";
            $result = mysqli_query($con, $query);

            if ($result === true){
                session_destroy();

                $this->retval = "deleted";

            }

        }
        else{
            $this->retval = "failed";
        }

        return $this->retval;


    }

    public function editprofile($id){
        include 'dump.php';
        if($con){
            $query = "SELECT*FROM `users` WHERE `slno`='$id'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);

            $mail = $row['email'];
            $pass = $row['pass'];
            $img = $row['img'];
            $this->retval = array($mail, $pass, $img);


        }

        return $this->retval;
        


    }

    public function doedit($email, $password, $id){
        include 'dump.php';
        if($con){
            $query = "UPDATE `users` SET `email`='$email' , `pass`='$password' WHERE `slno`='$id'";
            $result = mysqli_query($con, $query);
            if ($result === true){
                $this->retval = "success";
            }

        }else{
            $this->retval = "fail";

        }

        return $this->retval;

    }




}