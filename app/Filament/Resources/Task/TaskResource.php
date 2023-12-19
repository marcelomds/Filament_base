<?php

namespace App\Filament\Resources\Task;

use App\Filament\Resources\Task\TaskResource\Pages;
use App\Filament\Resources\Task\TaskResource\RelationManagers;
use App\Models\Task\Task;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TaskResource extends Resource
{
    protected static ?string $model = Task::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    public static function getNavigationBadge(): string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationGroup = 'Principal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Card::make()->schema([

                    Forms\Components\Select::make('user_id')
                        ->relationship('user', 'name')
                        ->searchable()
                        ->required(),

                    Forms\Components\Select::make('task_group_id')
                        ->relationship('taskGroup', 'title')
                        ->required(),

                    Forms\Components\TextInput::make('title')
                        ->columnSpan(2)
                        ->required(),

                    Forms\Components\RichEditor::make('description')
                    ->columnSpan(2)
            ])
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {


        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('taskGroup.title')
                    ->searchable()
                    ->sortable()
                    ->colors([
                        'info',
                        'primary' => 'Backlog',
                        'warning' => 'In Progress',
                        'success' => 'Done',
                        'danger' => 'To Do',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('d/m/Y H:i'),
            ])
            ->filters([
                SelectFilter::make('user')
                    ->searchable()
                    ->relationship('user', 'name')
                    ->label('Usuário'),

                SelectFilter::make('taskGroup')
                    ->searchable()
                    ->relationship('taskGroup', 'title')
                    ->multiple()
                    ->label('Grupo da Tarefa'),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTasks::route('/'),
            'create' => Pages\CreateTask::route('/create'),
            'edit' => Pages\EditTask::route('/{record}/edit'),
        ];
    }
}
