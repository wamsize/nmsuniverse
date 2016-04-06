<?php

$ch = curl_init('https://api.twitch.tv/kraken/streams?game=Destiny');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$r = curl_exec($ch);
curl_close($ch);

$request = json_decode($r);
$ior = rand(0, 10);
$i = $ior;
while (strcmp($request->streams[$i]->_links->self, "") == 0 or strcmp($request->streams[$i]->channel->mature, "1") == 0) {
	$i--;
	if ($i < 0) {
		break;
	}
}
if ($i == -1) {
	$i = $ior + 1;
	while (strcmp($request->streams[$i]->channel->mature, "1") == 0) {
		$i++;
	}
	if (strcmp($request->streams[$i]->_links->self, "") == 0) {
		$i = -1;
	}
}

if ($i == -1) {
	$twitchurl = "";
} else {
	$twitchurl = $request->streams[$i]->channel->name;
}

?>