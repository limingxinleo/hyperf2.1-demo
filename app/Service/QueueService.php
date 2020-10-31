<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Service;

use Carbon\Carbon;
use Hyperf\AsyncQueue\Annotation\AsyncQueueMessage;
use Hyperf\Utils\Coroutine;

class QueueService
{
    /**
     * @AsyncQueueMessage
     */
    public function dump()
    {
        var_dump(Coroutine::id());
    }

    /**
     * @AsyncQueueMessage(delay=10)
     */
    public function delay()
    {
        var_dump(Coroutine::id());
        var_dump(Carbon::now()->toDateTimeString());
    }
}
