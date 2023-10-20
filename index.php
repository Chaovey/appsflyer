<?php
   header('Content-Type: application/json');
   $data = [
       'url'=>'https://d658c652639285f9.com/apps.php?id=[APPID]&appsflyerId=[AppsFlyerUID]'
   ];
   echo json_encode($data);
?>