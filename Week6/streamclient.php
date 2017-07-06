<?php
$client = stream_socket_client("tcp://127.0.0.1:1337", $errno, $errorMessage );


if ($client === false) {
	throw new UnexpectedValueException ("Failed to connect: $errorMessage");
} else {

	while (!feof($client)) {
		echo fread ($client, 100);
	}
	fclose ($client);
}