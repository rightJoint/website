<?php
class View_Main extends View
{
    public $logo = "/img/siteLogo/rightjoint-logo-150.png";

    function __construct()
    {
        $this->lang_map["head"] = array(
            "description" => array(
                "en" => "Site temporary on reconstruction",
                "rus" => "Сайт временно на реконструкции",
            ),
            "title" => array(
                "en" => "Reconstruction",
                "rus" => "Реконструкция",
            ),
            "h1" => array(
                "en" => "Reconstruction",
                "rus" => "Реконструкция"
            ),
            "header_text" => array(
                "en" => "RIGHT JOINt",
                "rus" => "РАЙТ ДЖОЙНt",
            )
        );
        $this->lang_map["modal-menu"]["home_descr"] = array(
            "en" => "Site temporary on reconstruction",
            "rus" => "Сайт временно на реконструкции"
        );
    }
}