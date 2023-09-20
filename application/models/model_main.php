<?php
class Model_Main extends Model
{
    public $lang_map = array(
        "main_page_text" => array(
            "en" => "Reconstruction, updates come out soon",
            "rus" => "Реконструкция, обновления скоро выйдут"
        )
    );

    function get_data()
    {
        return $this->lang_map["main_page_text"][$_SESSION["lang"]];
    }
}