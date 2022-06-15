<?php
    $data = [
        'email' => htmlspecialchars(strip_tags($_GET['email'])),
        'message' => htmlspecialchars(strip_tags($_GET['message'])),
    ];
    $file = fopen(__DIR__ . '/data/messages.txt', 'a+');
    fwrite($file,$data['email'].' : '.$data['message']."\r\n");
    fclose($file);
    echo json_encode([
        'name' => 'Thanks!',
    ]);



