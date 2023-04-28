<?php
class home extends controller
{   
    public $val = [] ;

    public function index(){
        echo "Inside Index";
    }
    public function test($cal=[]){
        $this->val = $cal;
        $this->view("home/landing",$this->val);

    }

    //REG BUTTON FOR NAVBAR
    public function reg($value=[]){
        $this->view("home/reg",$value);
    }

    //regfunc for reg page button process
    public function regval(){
        
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $img_name = $_FILES['img']['name'];

        $img_tmp = $_FILES['img']['tmp_name'];

        $fileext = explode('.', $img_name);
        $ext = strtolower(end($fileext));

        $mailext = explode('.', $mail );
        $mailval = $mailext[0];



        $des = '../app/userimg/'.$mailval.'.'.$ext;

        $model = $this->model('user');
        $model->regindata($mail, $pass, $img_name, $img_tmp);
        $check = $model->retval;

        if($check == "true"){
            
            move_uploaded_file($img_tmp, $des);

        }

       
        $this->view("home/reg",$check);




    }

    //loging button function in navbar
    public function log($value=[]){
        $this->view("home/log",$value);

    }

    // after clicking loging button in loging page this function works
    public function logval(){
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        $model = $this->model('user');
        $model->logindata($mail, $pass);

        $check = $model->retval;

        if ($check == "login_failed" || $check == "dberror"){
            $this->view("home/log",$check);

        }else{
            header('location: https://localhost/MVC?login=success');
        }
        

    }

    //fuction for logout button
    public function logout(){
        session_destroy();
        header('location: https://localhost/MVC?logout=success');

    }
    // function to take in profile page
    public function profile(){
        $model = $this->model('user');
        $model->userdata($_SESSION['id']);
        $data = $model->retval;
        
        $this->view("home/profile",$data);
    }
    //buttton function of delete profile
    public function delprofile(){
        $model = $this->model('user');
        $model->delprofile($_SESSION['id']);
        $redirect = $model->retval;
        if($redirect == "deleted"){
            header('location: https://localhost/MVC?delete=success');

        }
        else{
            header('location: https://localhost/MVC?delete=fail');
        }
    }

    // edit profile page button function

    public function editprofile(){

        $model = $this->model('user');
        $model->editprofile($_SESSION['id']);
        $editval = $model->retval;
        $this->view("home/editprofile",$editval);

    }

    //profile editing function 
    public function editpro(){
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        $model = $this->model('user');
        $model->doedit($mail, $pass, $_SESSION['id']);
        $process = $model->retval;
        if($process == "success"){
            header('location: https://localhost/MVC?editid=success');
        }else {
            header('location: https://localhost/MVC?editid=fail');
        }

    }

    
}
