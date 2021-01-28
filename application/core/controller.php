<?php
class Controller
{
    public $model;
    public $view;

    public function __construct($model){
        $this->view = new $View();

    }
    public function action_index() {

    }
}