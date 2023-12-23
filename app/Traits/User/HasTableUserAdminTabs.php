<?php

namespace App\Traits\User;

use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

trait HasTableUserAdminTabs
{
    public function getTabs(): array
    {
        $model = static::getModel()::query();
        $total = $model->count();
        $allAdmins = $model->where('is_admin', true)->count();
        $isNotAdmin = $total - $allAdmins;

        return [
            'all' => Tab::make()
            ->label('Todos')
            ->icon('heroicon-o-bars-4')
            ->badge($total),
            'allAdmins' => Tab::make()
                ->label('Admins')
                ->icon('heroicon-o-check-circle')
                ->badge($allAdmins)
                ->modifyQueryUsing(fn (Builder $query) => $query->whereIsAdmin(true)),
            'isNotAdmin' => Tab::make()
                ->label('Não Admin')
                ->icon('heroicon-o-x-circle')
                ->badge($isNotAdmin)
                ->modifyQueryUsing(fn (Builder $query) => $query->whereIsAdmin(false)),
        ];
    }
}
