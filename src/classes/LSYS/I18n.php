<?php
/**
 * lsys core
 * @author     Lonely <shan.liu@msn.com>
 * @copyright  (c) 2017 Lonely <shan.liu@msn.com>
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
namespace LSYS;
/**
 * i18n class
 * @author lonely
 */
class I18n
{
	/**
	 * 默认当前请求语言
	 * @var string
	 */
	public static $lang=NULL;
	//now obj lang
	private $_lang;
	//defualt domain
	private $_domain;
	//i18n dir
	private $_dir;
	/**
	 * i18n support
	 * @param string $dir
	 * @param string $lang
	 */
	public function __construct($dir){
		$lang="en_US";
		if(self::$lang==null&&isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
			$lang=str_replace("-", "_",substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,5));
		}
		$this->_lang=$lang;
		$this->_dir=$dir;
		$this->setDomain("default");
	}
	/**
	 * set lang
	 * @param string $lang
	 * @return \LSYS\I18n
	 */
	public function setLang($lang){
		$this->_lang=$lang;
		return $this;
	}
	/**
	 * set i18n domain
	 * @param string $domain
	 */
	public function setDomain($domain){
		bind_textdomain_codeset($domain , 'UTF-8' );
		$this->_domain=$domain;
		return $this;
	}
	/**
	 * get i18n domain
	 * @return string
	 */
	public function getDomain(){
		return $this->_domain;
	}
	/**
	 * get message
	 * @param string $string 
	 * @param array $values
	 * @param string $domain
	 * @return string
	 */
	public function __($string,array $values=NULL,$domain=NULL){
		setlocale(LC_ALL, $this->_lang.".UTF-8");
		if ($domain===NULL)$domain=$this->_domain;
		else bind_textdomain_codeset($domain , 'UTF-8' );
		bindtextdomain($domain, $this->_dir);
		$string=dgettext($domain,$string);
		if(is_array($values)){
			foreach ($values as $k=>$v){
				$values[":".$k]=(string)$v;
				unset($values[$k]);
			}
			$string=strtr($string, $values);
		}
		return $string;
	}	
}