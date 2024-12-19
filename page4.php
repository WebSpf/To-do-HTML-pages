<?php
declare(strict_types=1);

session_start();
echo "Страница №3 открыта: " . $_SESSION['count'] . " раз.";