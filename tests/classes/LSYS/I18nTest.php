<?php
namespace LSYS;
use PHPUnit\Framework\TestCase;
final class CoreTest extends TestCase
{
    public function testSet()
    {
        $i18n=\LSYS\I18n\DI::get()->i18n(dirname(dirname(__DIR__))."/I18n/");
        $i18n->set_lang("en_US");
        $this->assertEquals($i18n->__("edit[:a]",array("a"=>"A")),"Edit[A]");
       $this->assertEquals($i18n->get_domain(),"default");
    }
}