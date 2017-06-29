<?php
class WorldService {
	private $worldattributes = array("1" => "brave", "2" => "new", "3" => "nice");
	function answerMe($whatKindOfWorld, $whatKindOfDay) 
	{
		return "Hello ".$this->worldattributes[$whatKindOfWorld]." World <br/> Have a ".$this->worldattributes[$whatKindOfDay]." Day";
	}
}
ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
$server = new SoapServer("helloworld.wsdl");
$server->setClass("WorldService");
$server->handle();
?>