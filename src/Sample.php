<?php
/**
 * @description
 *
 * @package
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
