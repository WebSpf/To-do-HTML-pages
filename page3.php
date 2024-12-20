<?php
declare(strict_types=1);

session_start();
$_SESSION['count']=isset($_SESSION['count'])?
++$_SESSION['count']:0;

$pageCount = $_SESSION['count'];

echo 'Страница открыта: ' . $pageCount . ' раз(а)';

if ($pageCount % 3 === 0){
        header ('Location: /page4.php');
    }