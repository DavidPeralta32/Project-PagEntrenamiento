<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Youtube</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<?php
    $API_key    = 'AIzaSyB-j7aCZ0DLyGNBPnjVLw6fzwylT_LYG1g';
    $channelID  = 'UCeevP_v2zbJl4oSpK3iiEWw';
    $maxResults = 5;

    $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

?>
    <div class="contenedor-api">
        <?php 
            foreach($videoList->items as $item){
                //Embed video
                if(isset($item->id->videoId)){
                    echo '<div class="youtube-video">
                            <iframe width="350" height="250" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                            <h2>'. $item->snippet->title .'</h2>
                            <h2>'.$item->snippet->description .'</h2>
                        </div>';
                }
            }
        ?>
    </div>
</body>
</html>
