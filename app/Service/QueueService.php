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
}
