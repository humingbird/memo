<?php
require_once 'Smarty.class.php';

if($_SERVER['PHP_SELF'] == '/work/memo/index.php'){
	require_once('conf/smarty.conf.php');
}else{
	require_once '../conf/smarty.conf.php';
}

function setSmarty(){
	$smarty = new Smarty;

	$smarty->template_dir = SmartyConf::SMARTY_TEMPLATE;
	$smarty->config_dir = SmartyConf::SMARTY_CONFIG;
	$smarty->cache_dir = SmartyConf::SMARTY_CACHE;
	$smarty->compile_dir = SmartyConf::SMARTY_COMPILE;
		
	return $smarty;
}
