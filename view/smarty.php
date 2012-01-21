<?php
require '../conf/smarty.conf.php';
require 'Smarty.class.php';

$smarty = new Smarty;


$smarty->template_dir = SmartyConf::SMARTY_TEMPLATE;
$smarty->config_dir = SmartyConf::SMARTY_CONFIG;
$smarty->cache_dir = SmartyConf::SMARTY_CACHE;
$smarty->compile_dir = SmartyConf::SMARTY_COMPILE;