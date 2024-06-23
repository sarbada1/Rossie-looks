<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkingHourResource\Pages;
use App\Filament\Resources\WorkingHourResource\RelationManagers;
use App\Models\WorkingHour;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkingHourResource extends Resource
{
    protected static ?string $model = WorkingHour::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\TextInput::make('day')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_open')
                    ->required()
                    ->reactive(), // Make the toggle reactive
                Forms\Components\TimePicker::make('opening_time')
                    ->visible(function ($get) {
                        return $get('is_open') === true;
                    })
                    ->required(function ($get) {
                        return $get('is_open') === true;
                    }),
                Forms\Components\TimePicker::make('closing_time')
                    ->visible(function ($get) {
                        return $get('is_open') === true;
                    })
                    ->required(function ($get) {
                        return $get('is_open') === true;
                    }),
            ]);
        
    
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('day')
                ->searchable(),
            Tables\Columns\IconColumn::make('is_open')
                ->boolean(),
            Tables\Columns\TextColumn::make('opening_time')
                ->visible(function ($record) {
                    return !is_null($record) && isset($record->is_open) && $record->is_open === true;
                }),
            Tables\Columns\TextColumn::make('closing_time')
                ->visible(function ($record) {
                    return !is_null($record) && isset($record->is_open) && $record->is_open === true;
                }),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
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
            'index' => Pages\ListWorkingHours::route('/'),
            'create' => Pages\CreateWorkingHour::route('/create'),
            'view' => Pages\ViewWorkingHour::route('/{record}'),
            'edit' => Pages\EditWorkingHour::route('/{record}/edit'),
        ];
    }
}
