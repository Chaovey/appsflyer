<?php
   header('Content-Type: application/json');
   $data = [
       'url'=>'https://www.youtube.com/'
   ];
   echo json_encode($data);
?>