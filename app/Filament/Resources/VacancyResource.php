<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Enums\ArticleStatus;
use App\Filament\Resources\VacancyResource\Pages;
use App\Models\Vacancy;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class VacancyResource extends Resource
{
    protected static ?string $model = Vacancy::class;

    protected static ?string $navigationGroup = 'Vacancy';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Split::make([

                    Group::make([

                        Section::make([
                            TextInput::make('title')
                                ->required()
                                ->maxLength(255)
                                ->lazy()
                                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                            TextInput::make('slug')
                                ->required()
                                ->maxLength(255)
                                ->unique(ignoreRecord: true),

                            FileUpload::make('image')
                                ->disk('do')
                                ->image()
                                ->imageEditor()
                                ->columnSpanFull()
                                ->preserveFilenames()
                                ->saveUploadedFileUsing(function (TemporaryUploadedFile $file, ?Vacancy $record) {
                                    return $record->saveConvertUploadedImage(
                                        file: $file,
                                        preserveFilename: true,
                                        overwriteFile: true
                                    );
                                }),

                            TextInput::make('subtitle')
                                ->maxLength(512),

                            TextInput::make('info_heading')
                                ->maxLength(255),

                            Textarea::make('quote')
                                ->rows(5)
                                ->columnSpanFull(),

                            Repeater::make('blocks')
                                ->columnSpanFull()
                                ->collapsed()
                                ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                ->schema([
                                    TextInput::make('title')
                                        ->lazy(),
                                    TinyEditor::make('content')
                                        ->toolbarSticky(false)
                                        ->toolbarMode('sliding')
                                        ->fileAttachmentsDisk('do')
                                        ->saveUploadedFileAttachmentsUsing(function (TemporaryUploadedFile $file, ?Vacancy $record) {
                                            return $record->saveConvertUploadedImage(
                                                file: $file,
                                                preserveFilename: true,
                                                desiredWidth: 1000,
                                                desiredHeight: 600,
                                            );
                                        }),
                                ]),

                        ]),
                    ]),

                    Group::make([

                        Section::make('Publish')
                            ->description('Settings for publishing this vacancy')
                            ->columnSpan(1)
                            ->schema([
                                Select::make('status')
                                    ->options(ArticleStatus::class)
                                    ->required()
                                    ->live(),
                                DateTimePicker::make('published_at')
                                    ->hidden(fn (Get $get) => $get('status') !== 'published'),
                            ]),

                        Section::make([

                            Select::make('user_id')
                                ->label('Recruiter (contact person)')
                                ->relationship('user', 'name')
                                ->searchable(['name', 'email'])
                                ->preload()
                                ->nullable(),

                            Select::make('location_id')
                                ->label('Location')
                                ->relationship('location', 'name')
                                ->preload()
                                ->nullable(),
                        ]),

                    ])->grow(false),

                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->badge(),
                Tables\Columns\TextColumn::make('location.name')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('info_heading')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort(fn ($query) => $query->orderByRaw('FIELD(status, "draft", "preview", "rejected", "published"), published_at DESC, created_at DESC'))
            ->recordUrl(fn (Vacancy $record) => route('filament.admin.resources.vacancies.edit', $record->id))
            ->filters([
                //
            ])
            ->actions([
                Action::make('view')
                    ->url(fn (Vacancy $record) => route('vacancy.show', $record->slug))
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->color('gray')
                    ->openUrlInNewTab()
                    ->hidden(fn (Vacancy $record) => ! in_array($record->status, [ArticleStatus::PUBLISHED, ArticleStatus::PREVIEW])),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListVacancies::route('/'),
            'create' => Pages\CreateVacancy::route('/create'),
            // 'view' => Pages\ViewVacancy::route('/{record}'),
            'edit' => Pages\EditVacancy::route('/{record}/edit'),
        ];
    }
}
