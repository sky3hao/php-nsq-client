<?php
/**
 * env
 * User: moyo
 * Date: 8/10/16
 * Time: 5:02 PM
 */

// test env

define('RESOURCE_PATH', realpath(__DIR__ . '/../') . '/resources/');

// force type for mock

define('K_QUEUE_FORCE_PUB_VIA_TYPE', 'http');

// class aliases

class_alias('Kdt\Iron\Queue\Tests\classes\Config', 'Config');
class_alias('Kdt\Iron\Queue\Tests\classes\Log\Log', 'Kdt\Iron\Log\Log');
class_alias('Kdt\Iron\Queue\Tests\classes\Live\DCC', 'Kdt\Iron\Config\Live\DCC');
class_alias('Kdt\Iron\Queue\Tests\classes\nsqphp\HTTP', 'nsqphp\Connection\HTTP');
