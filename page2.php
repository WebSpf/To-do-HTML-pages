<?php

declare(strict_types=1);

if (!isset($_GET['text'])) {
    echo "Параметр 'text' не найден.";
    exit;
}

$text = $_GET['text'];

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="text.txt"');

echo $text;