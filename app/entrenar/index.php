<?php
// Resultados por pagina
$resPorPagina = 3;
// Llave obtenida de youtube api
$key = "AIzaSyB-j7aCZ0DLyGNBPnjVLw6fzwylT_LYG1g";
// Id del canal obtenido de https://commentpicker.com/youtube-channel-id.php
$idCanal = "UC0I19sf5TmnD-oFzsI9kpOA";
?>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>URL</th>
            <th>Publicado el</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $json_url = 'https://www.googleapis.com/youtube/v3/search?key=' . $key . '&channelId=' . $idCanal . '&part=snippet,id&order=date&maxResults=' . $resPorPagina;
        //echo $json_url;
        $ch = curl_init($json_url);

        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json')
        );

        curl_setopt_array($ch, $options);

        $result = curl_exec($ch);
        $json_output = json_decode($result, true);
        //var_dump($json_output);
        foreach ($json_output["items"] as $contador => $elemento) {
            // Si es video (No lista)
            if ($elemento["id"]["videoId"]) {
                $urlVideo = "https://www.youtube.com/watch?v=" . $elemento["id"]["videoId"];
                $tituloVideo = $elemento["snippet"]["title"];
                $fechaVideo = $elemento["snippet"]["publishedAt"];
                ?>
                <tr>
                    <td><?php echo $elemento["snippet"]["title"]; ?></td>
                    <td><a href="<?php echo $urlVideo; ?>"><?php echo $urlVideo; ?></a></td>
                    <td><?php echo $fechaVideo; ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </tbody>
</table>