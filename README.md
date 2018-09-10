多语言
===
[![Build Status](https://travis-ci.com/php-lsys/i18n.svg?branch=master)](https://travis-ci.com/php-lsys/i18n)
[![Coverage Status](https://coveralls.io/repos/github/php-lsys/i18n/badge.svg?branch=master)](https://coveralls.io/github/lsys/i18n?branch=master)

使用代码
```
//---------------------------多语言--------------------------------------
//方便使用请定义一个函数后使用 参阅 dome/i18n.php
//语言文件放置于 I18n 目录
echo LSYS\I18n\DI::get()->i18n(__DIR__."/I18n/")->__("this is i18n");
```

