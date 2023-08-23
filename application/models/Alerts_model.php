<?php
class Alerts_model extends Model
{
    public $lang_map = array(
        "stack_err" => array(
            "notFound" => array(
                "title" => array(
                    "en" => "Not found",
                    "rus" => "Не найдено",
                ),
                "h1" => array(
                    'en' => "Page not found",
                    "rus" => "Страница не найдена",
                )
            ),
            "stab" => array(
                "title" => array(
                    "en" => "Reconstruction",
                    "rus" => "Реконструкция",
                ),
                "h1" => array(
                    "en" => "Page temporarily on reconstruction",
                    "rus" => "Страница временно на реконструкции",
                )
            ),
            "access" => array(
                "title" => array(
                    "en" => "Forbidden",
                    "rus" => "Запрещен",
                ),
                "h1" => array(
                    "en" => "Access denied",
                    "rus" => "Доступ запрещен",
                )
            ),
            "connection" => array(
                "title" => array(
                    "en" => "Connection",
                    "rus" => "Подключение",
                ),
                "h1" => array(
                    "en" => "Connection problem",
                    "rus" => "Проблема с подключением",
                ),
            ),
            "request" => array(
                "title" => array(
                    "en" => "Request",
                    "rus" => "Запрос",
                ),
                "h1" => array(
                    "en" => "Wrong request",
                    "rus" => "Неправильные параметры запроса",
                ),
            ),
            "config" => array(
                "title" => array(
                    "en" => "Configuration",
                    "rus" => "Конфигурация",
                ),
                "h1" => array(
                    "en" => "Configuration error",
                    "rus" => "Ошибка в конфигурации",
                ),
            ),
            "XXX" => array(
                "title" => array(
                    "en" => "Unknown error",
                    "rus" => "Неизвестная ошибка",
                ),
                "h1" => array(
                    "en" => "Unknown error occurred",
                    "rus" => "Произошка неизвестная ошибка",
                )
            )
        )
    );

    public $respCode = array(
        "notFound" => 404,
        "access" => 403,
        "request" => 400,
    );
}