<?php
$client = new SoapClient(NULL, array(
		"location" => "http://assignments.local/Week5/helloserver.php",
		"uri"      => "something",
		"style"    => SOAP_RPC,
		"use"      => SOAP_ENCODED,
		"trace"	   => 1
));
print($client->__soapCall("answerMe", array(new SoapParam("2","whatKindOfWorld"), new SoapParam("3", "whatKindOfDay"))));
?>