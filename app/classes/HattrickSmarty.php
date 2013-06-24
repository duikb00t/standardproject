<?php
require_once('Smarty.class.php');

class HattrickSmarty extends Smarty
{
	function __construct()
	{
		global $config;
		
		parent::__construct();
		
		$this->setTemplateDir($config->smarty_template_dir);
		$this->setCompileDir($config->smarty_compile_dir);
	}
}
?>