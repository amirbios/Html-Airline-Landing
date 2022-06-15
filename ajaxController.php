<?php
    $data = [
        'fname' => htmlspecialchars(strip_tags($_GET['name'])),
        'lname' => htmlspecialchars(strip_tags($_GET['last_name'])),
        'mobile' => htmlspecialchars(strip_tags($_GET['mobile'])),
    ];
    $file = fopen(__DIR__ . '/data/customers.txt', 'a+');
    fwrite($file,$data['fname'].' '.$data['lname'].' : '.$data['mobile']."\r\n");
    fclose($file);
    echo json_encode([
        'name' => $data['fname'].' '.$data['lname'],
        'code' => 'OFF-CODE',
    ]);



