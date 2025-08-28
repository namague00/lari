<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RunerResource\Pages;
use App\Filament\Resources\RunerResource\RelationManagers;
use App\Models\Runer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RunerResource extends Resource
{
    protected static ?string $model = Runer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                    Forms\Components\TextInput::make('name')
                      ->label('Name'),

                    
                    Forms\Components\TextInput::make('bib')
                    ->required()
                    ->maxLength(255)
                    ->default(function () {
                        $lastParticipant = Runer::latest('id')->first();
                        $lastNumber = $lastParticipant ? (int) substr($lastParticipant->bib, 3) : 0;
                        return 'TQ-' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
                    })
                    ->disabled()
                    ->dehydrated(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('index')
                    ->label('#')
                    ->rowIndex()
                    ->width('10px'),

                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('bib'),
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRuners::route('/'),
            'create' => Pages\CreateRuner::route('/create'),
            'edit' => Pages\EditRuner::route('/{record}/edit'),
        ];
    }
}
