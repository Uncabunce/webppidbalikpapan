<?php

namespace App\Filament\Admin\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            // 1. Moved to the top so the image thumbnail shows up on the far left
            ImageColumn::make('image')
                ->label('Thumbnail')
                ->square(),

            TextColumn::make('title')
                ->searchable()
                ->sortable(),

            TextColumn::make('slug')
                ->searchable()
                ->toggleable(isToggledHiddenByDefault: true), // Optional: hides slug by default to save screen space

            // 2. Swapped text video path out for a cleaner icon indicator if a video exists
            IconColumn::make('video')
                ->label('Has Video')
                ->icon(fn ($state): string => $state ? 'heroicon-o-video-camera' : '')
                ->color('success'),

            IconColumn::make('is_published')
                ->label('Published')
                ->boolean(),

            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
