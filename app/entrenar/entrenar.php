<?php 
echo '<h1>Videos de entranamiento</h1>';
echo '<a href="../login/cerrar.php">Cerrar sesion</a>';
//Resultados por pagina
//  $MAX_RESULTS = 3;
//  // Llave obtenida de youtube api
//  $API_kEY = "AIzaSyB-j7aCZ0DLyGNBPnjVLw6fzwylT_LYG1g";
//  // Id del canal obtenido de https://commentpicker.com/youtube-channel-id.php
//  $CHANNEL_ID = "UC0I19sf5TmnD-oFzsI9kpOA";

//      $videoLista =
//          json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$CHANNEL_ID.'&maxResults='.$MAX_RESULTS.'&key='.$API_kEY.''));

//      foreach($videoLista->items as $item){
//          if(isset($item->id->videoId)){
//              echo '<div class="youtube-video">
//              <iframe width="280" height="150"
//               src="https://www.youtube.com/embed/'.$item->id->videoId.'" 
//               frameborder="0" allowfullscreen></iframe>
//              <h2>'.$item->snippet->title.'</h2>
//              </div>';
//          }
//      }

//  if (!isset($_SESSION['usuario'])) {
//      header('Location: index.php');
//  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Videos">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/SA9cNu_B5Tg"
     frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
      gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</body>
</html>


