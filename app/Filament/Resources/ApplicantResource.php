<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicantResource\Pages;
use App\Models\Applicant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ApplicantResource extends Resource
{
    protected static ?string $model = Applicant::class;

    protected static ?string $navigationGroup = 'Vacancy';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vacancy'),
                Forms\Components\TextInput::make('first_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\Textarea::make('location')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('languages')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('link')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('how_did_you_find_us')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('source')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vacancy.title')
                    ->default('Werken-bij index pagina')
                    ->limit(32)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Filter::make('vacancy_id')
                    ->label('/werken-bij vacancy form')
                    ->query(fn ($query) => $query->whereNull('vacancy_id'))
                    ->toggle(),

                SelectFilter::make('vacancy')
                    ->relationship('vacancy', 'title'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ], position: ActionsPosition::BeforeCells)
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
            'index' => Pages\ListApplicants::route('/'),
            // 'create' => Pages\CreateApplicant::route('/create'),
            'view' => Pages\ViewApplicant::route('/{record}'),
            // 'edit' => Pages\EditApplicant::route('/{record}/edit'),
        ];
    }
}
