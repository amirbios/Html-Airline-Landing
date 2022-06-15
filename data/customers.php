<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
</head>
<body>
    <ul>
        <?php
        $file = fopen(__DIR__ . '/customers.txt', 'r');
        if ($file) {
            while (($line = fgets($file)) !== false) {
                // process the line read.
                echo '<li>'.$line.'</li>';
            }
            fclose($file);
        } else {
            // error opening the file.
            fclose($file);
        }
        ?>
    </ul>
</body>
</html>



