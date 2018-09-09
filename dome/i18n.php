<?php
include __DIR__."/Bootstarp.php";
//一般会定义一个函数方便使用
/*
function __($string, array $values = NULL, $domain = "default")
{
	$i18n=\LSYS\I18n\DI::get()->i18n(__DIR__."/I18n/");
	return $i18n->__($string,  $values , $domain);
}
//调用
echo __("edit");//see __ function define
echo __("status");//see __ function define
*/
//OR call..
$i18n=LSYS\I18n\DI::get()->i18n(__DIR__."/I18n/");
echo $i18n->__("edit");
echo $i18n->__("status");
