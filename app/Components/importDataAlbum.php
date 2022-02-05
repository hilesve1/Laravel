<?php

namespace App\Components;
use GuzzleHttp\Client;

class importDataAlbum {
   public $client;

   public function __construct()
   {
    $this->client = new Client([
        // Базовый URI используется с относительными запросами
        'base_uri' => 'http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=ade6a1668a2522a551569761691f411c',
        // Вы можете установить любое количество параметров запроса по умолчанию.
        'timeout'  => 2.0,
      ]);
   }

}