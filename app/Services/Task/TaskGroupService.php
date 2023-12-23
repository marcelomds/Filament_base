<?php

namespace App\Services\Task;

use App\Repository\Task\TaskGroupRepository;

class TaskGroupService
{
    /**
     * @var TaskGroupRepository
     */
    private $taskGroupRepository;
    public function __construct(TaskGroupRepository $taskGroupRepository)
    {
        $this->taskGroupRepository = $taskGroupRepository;
    }
}
