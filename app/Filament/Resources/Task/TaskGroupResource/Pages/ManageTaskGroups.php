<?php

namespace App\Filament\Resources\Task\TaskGroupResource\Pages;

use App\Filament\Resources\Task\TaskGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTaskGroups extends ManageRecords
{
    protected static string $resource = TaskGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
