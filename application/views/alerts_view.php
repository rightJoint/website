<?php
$alert_lang_map = array(
    "ew-warning" => array(
        "en" => "At this page displaying catched errors. If you are here, something gone wrong.",
        "rus" => "На этой странице отображаются ошибки, перехваченные приложением. Если вы здесь, значит что-то пошло не так."
    ),
    "ew-txt" => array(
        "en" => "Error occurred",
        "rus" => "ОШИБКА",
    )
);
echo"<div class='contentBlock-frame'><div class='contentBlock-center'>".
    "<div class='contentBlock-wrap'>".
    "<div class='err-wrap'>".
    "<div class='ew-warning'>".
    $alert_lang_map["ew-warning"][$_SESSION["lang"]].
    "</div>".
    "<span class='ew-txt'>".$alert_lang_map["ew-txt"][$_SESSION["lang"]]."</span>".
    "<span class='ew-code'>".$data["code"]."</span>".
    "<span class='ew-h'>".$data["h1"]."</span>";
if($data["message"]){
    echo  "<div class='ew-detail'>".$data["message"]."</div>";
}
echo "</div>".
    "</div>".
    "</div>".
    "</div>";