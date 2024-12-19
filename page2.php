<?php

declare(strict_types=1);

header('Content-Type: text/plain');

header('Content-Disposition: attachment; filename="text.txt"');

echo $_GET['text'];