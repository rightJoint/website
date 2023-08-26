<?php
class Alerts_controller extends Controller
{
    function __construct()
    {
        $this->model = new Alerts_model();
        $this->view = new Alerts_View();
    }
    function generateErr($errType, $message)
    {
        foreach ($this->model->stack_err as $err_type => $err_info){
            if ($errType == $err_type) {
                $this->view->lang_map["head"]["h1"] = $err_info["h1"];
                $this->view->lang_map["head"]["title"] = $err_info["title"];
                $this->view->lang_map["head"]["description"] = $err_info["description"];
                $this->view->view_data = $err_info["description"][$_SESSION["lang"]];
                $this->view->response_code = $err_info["response_code"];
                break;
            }
        }

        $this->view->generate();

        if($this->view->response_code != 200){
            http_response_code($this->view->response_code);
        }
    }

}