<?php

namespace App\Filament\Admin\Resources\Posts\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

            TextInput::make('title')
                ->required(),

            TextInput::make('slug')
                ->required(),

            // Swapped Textarea out for a RichEditor if you want styled text, 
            // but keeping Textarea is fine too if you just want plain text!
            RichEditor::make('content')
                ->columnSpanFull(),

            FileUpload::make('image')
                ->image()
                ->directory('news-images'),

            // FIXED: Changed TextInput to FileUpload for video clips
            FileUpload::make('video')
                ->acceptedFileTypes(['video/mp4', 'video/ogg', 'video/webm'])
                ->directory('news-videos'),

            Toggle::make('is_published')
                ->required(),
            ]);
    }
}
