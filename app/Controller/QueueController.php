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
namespace App\Controller;

use App\Service\QueueService;
use Carbon\Carbon;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Utils\Coroutine;

/**
 * @AutoController(prefix="queue")
 */
class QueueController extends Controller
{
    /**
     * @Inject
     * @var QueueService
     */
    protected $service;

    public function dump()
    {
        var_dump(Coroutine::id());
        $this->service->dump();
        var_dump(Carbon::now()->toDateTimeString());
        $this->service->delay();
        return $this->response->success();
    }
}
