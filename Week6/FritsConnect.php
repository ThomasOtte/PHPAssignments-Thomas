<?php
$client = stream_socket_client("tcp://10.0.1.104:1037", $errno, $errorMessage );


if ($client === false) {
	throw new UnexpectedValueException ("Failed to connect: $errorMessage");
} else {

	while (!feof($client)) {
		echo fread ($client, 100);
	}
	fclose ($client);
}