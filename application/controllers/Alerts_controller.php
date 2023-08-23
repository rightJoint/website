<?php
class Alerts_controller extends Controller
{
    function __construct()
    {
        $this->model = new Alerts_model();
        $this->view = new View();
    }
    function generateErr($errType, $message)
    {
        foreach ($this->model->lang_map["stack_err"] as $et => $ed){
            if ($errType == $et) {
                $data["head"]["title"] = $ed["title"][$_SESSION["lang"]];
                $data["h1"] = $ed["h1"][$_SESSION["lang"]];
                $data["head"]["description"] = $ed["h1"][$_SESSION["lang"]];
                break;
            }
        }

        $data["includes"] = array(
            "application/views/alerts_view.php" => null,
        );
        $data["message"] = $message;

        if(key_exists($errType, $this->model->respCode)){
            http_response_code($this->model->respCode[$errType]);
        }
    }

}