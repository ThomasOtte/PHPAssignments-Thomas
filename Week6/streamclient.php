<?php
$client = stream_socket_client("tcp://127.0.0.1:80", $errno, $errorMessage);

if ($client === false) {
	throw new UnexpectedValueException ( "Failed to connect: $errorMessage" );
} else {
	fwrite($client, "client");
	$buf = fgets($client);
	var_dump($buf);
	fclose($client);
}