<?php

$file = fopen('../data/feedback.txt', 'r');
$content = fread($file, filesize('../data/feedback.txt'));
$feedback= $content;
fclose($file);


?>