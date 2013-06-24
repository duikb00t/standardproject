<?php
class HattrickPDO extends PDO
{
	private static $instance = null;
	
	public static function getInstance()
	{
	global $config;
	
	if(is_null(self::$instance))
	{
  		self::$instance = new PDO('mysql:host=' .$config->db['host']
			.';port='.$config->db['port']
			.';dbname='.$config->db['name'],
			$config->db['user'],
			$config->db['pw']);
			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
        }
        return self::$instance;
    }
}
?>