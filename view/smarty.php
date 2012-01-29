<?php
require_once 'Smarty.class.php';
require_once '../conf/smarty.conf.php';

function setSmarty(){
	$smarty = new Smarty;

	$smarty->template_dir = SmartyConf::SMARTY_TEMPLATE;
	$smarty->config_dir = SmartyConf::SMARTY_CONFIG;
	$smarty->cache_dir = SmartyConf::SMARTY_CACHE;
	$smarty->compile_dir = SmartyConf::SMARTY_COMPILE;
		
	return $smarty;
}
