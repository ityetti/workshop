<?php

declare(strict_types=1);

namespace MageMastery\Todo\Api;

/**
 * @api
 */
interface TaskRepositoryInterface
{
    public function getList();
    public function get(int $taskId);
}
