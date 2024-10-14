<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Enums\ArticleStatus;
use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Split::make([

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
                            ->directory(function ($record) {
                                return 'articles/'.$record->id;
                            })
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->helperText('This will be the image used at the top of the article and the thumbnail of the article.')
                            ->columnSpanFull()
                            ->saveUploadedFileUsing(function (TemporaryUploadedFile $file, ?Article $record) {
                                return saveConvertUploadedImage(
                                    file: $file,
                                    dir: 'articles/'.$record->id,
                                    preserveFilename: true,
                                    overWriteFile: true
                                );
                            }),

                        TinyEditor::make('body')
                            ->columnSpanFull()
                            ->fileAttachmentsDisk('do')
                            ->fileAttachmentsDirectory(function ($record) {
                                return 'articles/'.$record->id;
                            })
                            ->saveUploadedFileAttachmentsUsing(function (TemporaryUploadedFile $file, ?Article $record) {
                                return saveConvertUploadedImage(
                                    file: $file,
                                    dir: 'articles/'.$record->id,
                                    preserveFilename: true,
                                    desiredWidth: 1000,
                                    desiredHeight: 600
                                );
                            }),

                    ]),

                    Group::make([
                        Section::make(__('Publish'))
                            ->description(__('Settings for publishing this article'))
                            ->schema([
                                Select::make('status')
                                    ->options(ArticleStatus::class)
                                    ->enum(ArticleStatus::class)
                                    ->required()
                                    ->live(),

                                Section::make()
                                    ->hidden(fn (Get $get) => $get('status') !== 'published')
                                    ->compact()
                                    ->schema([
                                        DateTimePicker::make('published_at'),
                                    ]),

                                Toggle::make('is_listed'),
                            ])
                            ->columnSpan(1),

                        TextInput::make('author')
                            ->maxLength(255),
                    ])->grow(false),

                ])->columnSpanFull()->from('md'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('status')
                    ->sortable()
                    ->searchable()
                    ->badge(),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->limit(64),
                TextColumn::make('slug')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->disk('do')
                    ->width(100),
                TextColumn::make('author')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
                IconColumn::make('is_listed')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
            ])
            ->defaultSort(fn ($query) => $query
                ->orderByRaw('FIELD(status, "draft", "preview", "rejected", "published"), published_at DESC, created_at DESC'))
            ->recordUrl(fn (Article $record) => route('filament.admin.resources.articles.edit', $record->id))
            ->filters([
                //
            ])
            ->actions([
                Action::make('view')
                    ->url(fn (Article $record) => route('news.show', $record->slug))
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->color('gray')
                    ->openUrlInNewTab()
                    ->hidden(fn (Article $record) => ! in_array($record->status, [ArticleStatus::PUBLISHED, ArticleStatus::PREVIEW])),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
