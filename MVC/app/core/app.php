<?php
class app
{   public $controller = 'home';
    public $method = 'index';
    public $params = [];

    //first $url[0] means a php file name that is in controllers folder and after it anything means a function in there $url[2]... means a value to be used in that function.
    public function __construct(){
        $url = $this->parseurl();



        if(empty($url[0])){
            $url[0]= 'landing';   
            $this->controller = $url[0];
            unset ($url[0]);
            
        }

        elseif (file_exists('../app/controllers'.$url[0].'.php')){
            $this->controller = $url[0];
            unset ($url[0]);
        }

        

        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;


        if (empty ($url[1])){
            $url[1] = 'indexview';
            $this->method = $url[1];
            unset($url[1]);
            
        }
        elseif(isset($url[1])){
            if (method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }

        }
        
        //making a dynamic function that get values to controller directory
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method],$this->params);
    }

    public function parseurl()
    {   
        //after putting url it comes here and become $url[0],$url[1] .... and so on
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));


        }


    }

}
