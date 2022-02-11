<?php

$url = "http://streamingp.shoutcast.com/hotmixradio-dance-128.mp3";

$ch = curl_init($url);

return curl_exec($ch);