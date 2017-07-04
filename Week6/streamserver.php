<?php
$server = stream_socket_client("tcp://127.0.0.1:80", $errno, $errorMessage );

if ($server === false) {
	throw new UnexpectedValueException ( "Failed to connect: $errorMessage" );
} else {
	while ( $conn = stream_socket_accept( $server)) {
		fwrite ( $conn, "<br> Hello World <br>" );
		fclose ( $conn );
	}
	fclose ( $server );
}