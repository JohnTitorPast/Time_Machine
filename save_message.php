<?php
    $message = json_decode(file_get_contents('php://input'), true);
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= json_encode($message) . "\n";
    file_put_contents($file, $current);
?>
