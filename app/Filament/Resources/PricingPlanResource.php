<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PricingPlanResource\Pages;
use App\Models\PricingPlan;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class PricingPlanResource extends Resource
{
    protected static ?string $model = PricingPlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Plan details')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Name')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->default(0)
                            ->minValue(0),

                        TextInput::make('price')
                            ->label('Price')
                            ->numeric()
                            ->required()
                            ->prefix(fn (callable $get) => $get('currency_symbol') ?: '$')
                            ->minValue(0)
                            ->rule('decimal:0,2'),

                        TextInput::make('currency_symbol')
                            ->label('Currency Symbol')
                            ->maxLength(8)
                            ->default('$'),

                        TextInput::make('currency')
                            ->label('Currency Code')
                            ->maxLength(3)
                            ->default('USD'),

                        TextInput::make('billing_period')
                            ->label('Billing Period')
                            ->placeholder('project, month, year...'),

                        Textarea::make('description')
                            ->label('Description')
                            ->rows(3)
                            ->columnSpanFull(),

                        TagsInput::make('features')
                            ->label('Features')
                            ->placeholder('Add feature')
                            ->columnSpanFull(),

                        TextInput::make('cta_label')
                            ->label('CTA Label')
                            ->default('Start Project'),

                        TextInput::make('cta_url')
                            ->label('CTA URL')
                            ->default('/contact'),

                        Toggle::make('is_featured')
                            ->label('Highlight plan')
                            ->inline(false)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('formatted_price')
                    ->label('Price'),

                TextColumn::make('billing_period')
                    ->label('Period')
                    ->sortable(),

                TagsColumn::make('features')
                    ->label('Features')
                    ->limit(3),

                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean(),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->filters([
                TernaryFilter::make('is_featured')
                    ->label('Featured'),
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
            'index' => Pages\ListPricingPlans::route('/'),
            'create' => Pages\CreatePricingPlan::route('/create'),
            'edit' => Pages\EditPricingPlan::route('/{record}/edit'),
        ];
    }
}
