<?php
class controller
{   
    //return model function that drag database values
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }

    //return a page for viewing
    public function view($viewname, $data=[]){
        require_once '../app/views/'.$viewname.'.php';

    }
}