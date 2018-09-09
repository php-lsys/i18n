<?php
namespace LSYS\I18n;
/**
 * @method \LSYS\I18n i18n($dir)
 */
class DI extends \LSYS\DI{
    /**
     * @return static
     */
    public static function get(){
        $di=parent::get();
        !isset($di->i18n)&&$di->i18n(new \LSYS\DI\ShareCallback(function($dir){
            return $dir;
        },function($dir){
            return new \LSYS\I18n($dir);
        }));
        return $di;
    }
}