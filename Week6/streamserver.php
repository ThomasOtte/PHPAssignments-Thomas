<?php
$server = stream_socket_server("tcp://127.0.0.1:1337", $errno, $errorMessage );


if ($server === false) {
	throw new UnexpectedValueException ("Failed to connect: $errorMessage");
} else {

	while ($conn = stream_socket_accept($server)) {
		stream_filter_append($conn, 'string.toupper');
		fwrite ($conn, "Hello World \n");
		fclose ($conn);
	}
	fclose ($server);
}
