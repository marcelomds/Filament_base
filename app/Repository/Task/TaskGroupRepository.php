<?php

namespace App\Repository\Task;

use App\Models\Task\TaskGroup;
use App\Repositories\AbstractRepository;

class TaskGroupRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(TaskGroup::class);
    }
}
