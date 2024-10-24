<?php

namespace App\Filament\Resources\PageResource\RelationManagers;

use App\Filament\Resources\SectionResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class SectionsRelationManager extends RelationManager
{
    protected static string $relationship = 'sections';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->reorderable('order')
            ->headerActions([
                Tables\Actions\AttachAction::make(),
                Tables\Actions\CreateAction::make()
                    ->url(fn ($livewire) => SectionResource::getUrl('create', ['pageRecord' => $livewire->ownerRecord->getKey()])),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->url(fn (Model $record, $livewire) => SectionResource::getUrl('edit', ['record' => $record, 'pageRecord' => $livewire->ownerRecord->getKey()])),
                Tables\Actions\DetachAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }
}
