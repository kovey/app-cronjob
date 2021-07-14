<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2021-07-14 10:37:47
 *
 */
namespace Cron\Other;

use Kovey\Cronjob\Cronjob\Base;

class Sample extends Base
{
    protected function process() : void
    {
        $this->echoMsg('offset: ' . $this->getOption('offset'));
    }
}
