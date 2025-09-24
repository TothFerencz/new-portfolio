<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('category')
                    ->label('Category')
                    ->required(),

                TextInput::make('years')
                    ->label('Year')
                    ->numeric()
                    ->required(),

                TextInput::make('timeline')
                    ->label('Timeline')
                    ->required(),

                Textarea::make('short_description')
                    ->label('Short Description')
                    ->rows(3),

                FileUpload::make('first_image')
                    ->label('First Image')
                    ->image()
                    ->directory('projects')
                    ->disk('public')
                    ->maxSize(2048),

                FileUpload::make('second_image')
                    ->label('Second Image')
                    ->image()
                    ->directory('projects')
                    ->disk('public')
                    ->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('first_image')
                    ->label('Preview')
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category')
                    ->sortable(),

                Tables\Columns\TextColumn::make('years')
                    ->label('Year')
                    ->sortable(),

                Tables\Columns\TextColumn::make('timeline')
                    ->label('Timeline'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
