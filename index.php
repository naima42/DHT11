<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>mon thermometre</title>
  </head>
  <body>

    <h1>Températures</h1>
    <?php
    $filename = "data.txt";
    $json=file_get_contents($filename);
    $data=json_decode($json);
    $date_update = filemtime($filename);


    $bargraph_height = 161 + $data->temperature * 4;
    $bargraph_top= 315 - $data->temperature * 4;


     ?>

     <p> il fait <?php echo $data->temperature;?>°C avec <?php echo $data->humidite ?>% d'humidité. le 30/11/2018 <br>
       Le <?php echo date("d/m/Y", $date_update) ; ?>
       à <?php echo date("H:i:s", $date_update) ; ?>.
     </p>

     <div id="thermometer">
     <div id="bargraph" style="height:<?php echo $bargraph_height; ?>px;top:<?php echo $bargraph_top; ?>px;"></div>
      </div>
</img>
  </body>
</html>
