<?php
class Connect
{
	private static $dbName = 'Week7' ;
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'Client1';
	private static $dbUserPassword = 'Test2';
	 
	private static $cont  = null;
	 
	public function __construct() {
		die('Init function is not allowed');
	}
	 
	public static function connect()
	{
		if ( null == self::$cont )
		{
			try
			{
				self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
				// self::$cont = new mysqli(self::$dbHost, self::$dbUsername, self::$dbUserPassword, self::$dbName);
			}
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
		}
		return self::$cont;
	}
	 
	public static function disconnect()
	{
		self::$cont = null;
	}
}
?>