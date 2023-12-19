<?php

namespace App\Filament\Resources\Task\TaskResource\Pages;

use App\Filament\Resources\Task\TaskResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTask extends CreateRecord
{
    protected static string $resource = TaskResource::class;
}
