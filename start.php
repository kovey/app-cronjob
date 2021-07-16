<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2021-07-14 10:27:14
 *
 */
define('APPLICATION_PATH', __DIR__);

require_once APPLICATION_PATH .'/vendor/autoload.php';
date_default_timezone_set('Asia/shanghai');

use Kovey\Cronjob\Run;
use Kovey\Library\Config\Manager;
use Kovey\Library\Util\Json;
use Kovey\Cronjob\Util\Debug;

Manager::init(APPLICATION_PATH . '/conf');

if (!is_dir(APPLICATION_PATH . '/lock')) {
    mkdir(APPLICATION_PATH . '/lock', 0777, true);
}

$config = Json::decode(file_get_contents(APPLICATION_PATH . '/conf/cron.json'));

Debug::setNodeName($config['node_name']);

$run = new Run(APPLICATION_PATH . '/lock', 'Cron');
$run->loop();
