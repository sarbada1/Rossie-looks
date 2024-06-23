<?php
namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\Textarea::make('description'),
                Forms\Components\Select::make('type')
                    ->options([
                        'photo' => 'Photo',
                        'video' => 'Video',
                    ])
                    ->reactive()
                    ->required(),
                Forms\Components\FileUpload::make('photo_path')
                    ->image()
                    ->visible(fn ($get) => $get('type') === 'photo'),
                Forms\Components\TextInput::make('video_url')
                    ->url()
                    ->visible(fn ($get) => $get('type') === 'video'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\ImageColumn::make('photo_path')
                    ->visible(fn ($record) => $record && $record->type === 'photo'),
                Tables\Columns\TextColumn::make('video_url')
                    ->visible(fn ($record) => $record && $record->type === 'video'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'view' => Pages\ViewGallery::route('/{record}'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
