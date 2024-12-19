<?php
declare(strict_types=1);
// header($_SERVER['SERVER_PROTOCOL'] . "404 Not Found");
// header("HTTP/1.0 404 Not Found");
http_response_code(404);

echo "Hесуществующий URL, Ошибка 404";