<?php
// beans配置
$definitions = require_once BASE_PATH . '/config/base.php';
$beanFactory = new \Swoft\Bean\BeanFactory($definitions);

$initApplicationContext = new \Swoft\Base\InitApplicationContext();
$initApplicationContext->init();
