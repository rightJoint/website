<?php
include "application/views/main_view.php";

class Controller_Main extends Controller
{
    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View_Main();
    }
}