<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Models\Footer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-down';
    
    protected static ?string $navigationLabel = 'Footer';
    
    protected static ?string $modelLabel = 'Footer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Logo & Heading')
                    ->schema([
                        Forms\Components\FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->disk('public')
                            ->directory('footers')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml']),
                        Forms\Components\TextInput::make('heading')
                            ->label('Heading (Next to Logo)')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('subheading')
                            ->label('Subheading')
                            ->rows(2),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Top Information Bar')
                    ->schema([
                        Forms\Components\Repeater::make('top_info_items')
                            ->label('Top Info Items (4 items)')
                            ->schema([
                                Forms\Components\TextInput::make('text')
                                    ->label('Text')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('icon')
                                    ->label('Icon Name (e.g., medal, car, tag, compare)')
                                    ->maxLength(50),
                            ])
                            ->defaultItems(4)
                            ->minItems(4)
                            ->maxItems(4)
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('ABOUT CARDEKHO Links')
                    ->schema([
                        Forms\Components\Repeater::make('about_links')
                            ->schema([
                                Forms\Components\TextInput::make('label')
                                    ->label('Link Name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('url')
                                    ->label('URL')
                                    ->url()
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->defaultItems(1)
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('CONNECT WITH US Links')
                    ->schema([
                        Forms\Components\Repeater::make('connect_links')
                            ->schema([
                                Forms\Components\TextInput::make('label')
                                    ->label('Link Name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('url')
                                    ->label('URL')
                                    ->url()
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->defaultItems(1)
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('OTHERS Links')
                    ->schema([
                        Forms\Components\Repeater::make('others_links')
                            ->schema([
                                Forms\Components\TextInput::make('label')
                                    ->label('Link Name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('url')
                                    ->label('URL')
                                    ->url()
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->defaultItems(1)
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('Bottom Section')
                    ->schema([
                        Forms\Components\TextInput::make('copyright_text')
                            ->label('Copyright Text')
                            ->maxLength(255)
                            ->default('© 2025 Girnar Software Pvt. Ltd.'),
                        Forms\Components\Repeater::make('social_links')
                            ->label('Social Media Links')
                            ->schema([
                                Forms\Components\Select::make('platform')
                                    ->options([
                                        'facebook' => 'Facebook',
                                        'twitter' => 'Twitter/X',
                                        'youtube' => 'YouTube',
                                        'instagram' => 'Instagram',
                                        'linkedin' => 'LinkedIn',
                                    ])
                                    ->required(),
                                Forms\Components\TextInput::make('url')
                                    ->label('URL')
                                    ->url()
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->defaultItems(1)
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('heading'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            'index' => Pages\ManageFooters::route('/'),
        ];
    }
}
