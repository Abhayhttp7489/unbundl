<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarInquiryResource\Pages;
use App\Models\CarInquiry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CarInquiryResource extends Resource
{
    protected static ?string $model = CarInquiry::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';
    
    protected static ?string $navigationLabel = 'Car Inquiries';
    
    protected static ?string $modelLabel = 'Car Inquiry';
    
    protected static ?string $pluralModelLabel = 'Car Inquiries';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('address')
                    ->required()
                    ->rows(3),
                Forms\Components\CheckboxList::make('car_types')
                    ->options([
                        'Hatchback' => 'Hatchback',
                        'Sedan' => 'Sedan',
                        'SUV' => 'SUV',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('car_types')
                    ->badge()
                    ->formatStateUsing(fn ($state) => is_array($state) ? implode(', ', $state) : $state),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListCarInquiries::route('/'),
            'view' => Pages\ViewCarInquiry::route('/{record}'),
        ];
    }
}

