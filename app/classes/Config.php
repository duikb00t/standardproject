<?php
class Config{
	
	function __construct(){

	// BASE URL 
	$this->base_url = "";

	// SETTINGS
	$this->production = true;
	$this->smarty_compile_dir = "smarty_compile";
	$this->smarty_template_dir = "smarty_templates";
	$this->errorlog = "errors.log";

	// DATABASE CONNECTION
	$this->db = array(
		'name' => '',
		'user' => '',
		'pw' => '',
		'host' => '',
		'port' => 3306
		);

	// MENU 
	$this->menu = array(
		'Home' => 'home',
		);
	}
	
	// PSEUDO SINGLETON
	public static function getInstance(){
		if(is_null(self::$instance))
		{
			self::$instance = new Config();
		}
		return self::$instance;
	}
}
?>