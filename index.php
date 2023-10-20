<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppsFlyer</title>
</head>
<body>
    <?php
        header('Content-Type: application/json');
        $data = [
            'url'=>'https://www.youtube.com/'
        ];
        $result=json_encode($data);
        echo $result
    ?>
</body>
</html>