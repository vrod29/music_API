<?php

  if (!empty($_GET['artistId'])) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.musixmatch.com/ws/1.1/artist.albums.get?artist_id=".$_GET['artistId']."&s_release_date=desc&apikey=8f3df11a62eade09ece60f73582d6b1a&page_size=100");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
  }
?>
