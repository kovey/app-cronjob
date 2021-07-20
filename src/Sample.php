<?php
/**
 * @description a sample cronjob
 *
 * @run /php/to/php /path/to/cron/start.php --class=Sample --offset=100
 *
 * @package Cronjob
 *
 * @author kovey
 *
 * @time 2021-07-14 10:36:06
 *
 */
namespace Cron;

use Kovey\Cronjob\Cronjob\Base;

class Sample extends Base
{
    protected function process() : void
    {
        $this->echoMsg('offset: ' . $this->getOption('offset'));
    }
}
