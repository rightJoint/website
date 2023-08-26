<?php
class Controller {
    public $model;
    public $view;

    function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->view_data = $this->model->get_data();
        $this->view->generate();
    }

}