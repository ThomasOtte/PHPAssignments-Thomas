<?php
$json = file_get_contents(
		'http://api.openweathermap.org/data/2.5/weather?q=Amsterdam&APPID=e84fc8dbb8218947830dfd61909f60f1'
		);

$decode = json_decode($json);


echo $decode->main->temp . " F<br>";
echo $decode->weather[0]->description . "<br>";