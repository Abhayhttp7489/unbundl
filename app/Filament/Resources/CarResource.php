<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    
    protected static ?string $navigationLabel = 'Cars';
    
    protected static ?string $modelLabel = 'Car';
    
    protected static ?string $pluralModelLabel = 'Cars';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('brand')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('model')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('type')
                    ->options([
                        'Hatchback' => 'Hatchback',
                        'Sedan' => 'Sedan',
                        'SUV' => 'SUV',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->rows(3),
                Forms\Components\FileUpload::make('image')
                    ->label('Car Image')
                    ->image()
                    ->required()
                    ->disk('public')
                    ->directory('cars')
                    ->visibility('public')
                    ->maxSize(5120)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/gif']),
                Forms\Components\TextInput::make('price')
                    ->label('Price (Single)')
                    ->numeric()
                    ->prefix('₹'),
                Forms\Components\TextInput::make('min_price')
                    ->label('Min Price (Lakh)')
                    ->numeric()
                    ->prefix('₹')
                    ->helperText('Enter price in lakhs (e.g., 11.49 for ₹11.49 Lakh)'),
                Forms\Components\TextInput::make('max_price')
                    ->label('Max Price (Lakh)')
                    ->numeric()
                    ->prefix('₹')
                    ->helperText('Enter price in lakhs (e.g., 21.29 for ₹21.29 Lakh)'),
                Forms\Components\DatePicker::make('launch_date')
                    ->label('Launch Date')
                    ->displayFormat('M d, Y')
                    ->format('Y-m-d'),
                Forms\Components\Select::make('fuel_type')
                    ->options([
                        'Petrol' => 'Petrol',
                        'Diesel' => 'Diesel',
                        'Electric' => 'Electric',
                        'Hybrid' => 'Hybrid',
                        'CNG' => 'CNG',
                    ]),
                Forms\Components\TextInput::make('seating_capacity')
                    ->numeric()
                    ->minValue(2)
                    ->maxValue(9),
                Forms\Components\Toggle::make('is_most_searched')
                    ->label('Most Searched'),
                Forms\Components\Toggle::make('is_latest')
                    ->label('Latest'),
                Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->badge(),
                Tables\Columns\TextColumn::make('price')
                    ->money('INR')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_most_searched')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_latest')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'Hatchback' => 'Hatchback',
                        'Sedan' => 'Sedan',
                        'SUV' => 'SUV',
                    ]),
                Tables\Filters\TernaryFilter::make('is_most_searched')
                    ->label('Most Searched'),
                Tables\Filters\TernaryFilter::make('is_latest')
                    ->label('Latest'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ManageCars::route('/'),
        ];
    }
}

