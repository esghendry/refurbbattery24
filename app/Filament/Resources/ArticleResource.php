<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Enums\ArticleStatus;
use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\ImageDriver;
use Spatie\Image\Image;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->lazy()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

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
                        $extension = $file->getClientOriginalExtension();

                        if (! in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                            return $file->store('articles/'.$record->id, 'do');
                        }

                        $imagePath = 'articles/'.$record->id.'/'.pathinfo($file->getFilename())['filename'].'.webp';
                        // $imagePath = 'articles/'.$record->id.'/'.pathinfo($file->getClientOriginalName())['filename'].'.webp';

                        // convert the image to webp, get the base64 encoded image. Because Image is not able to save the image to the cloud disk for some reason
                        $image = Image::useImageDriver(ImageDriver::Gd)
                            ->loadFile($file->getRealPath())
                            ->optimize()
                            ->base64('webp', false);

                        // save the image to the cloud disk
                        Storage::disk('do')->put($imagePath, base64_decode($image));

                        return $imagePath;
                    }),

                TinyEditor::make('body')
                    ->columnSpanFull()
                    ->fileAttachmentsDisk('do')
                    ->fileAttachmentsDirectory(function ($record) {
                        return 'articles/'.$record->id;
                    })
                    ->saveUploadedFileAttachmentsUsing(function (TemporaryUploadedFile $file, ?Article $record) {
                        $extension = $file->getClientOriginalExtension();

                        // if image
                        if (! in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                            return $file->store('articles/'.$record->id, 'do');
                        }

                        $imagePath = 'articles/'.$record->id.'/'.$file->getFilename().'.webp';

                        // convert the image to webp, get the base64 encoded image. Because Image is not able to save the image to the cloud disk for some reason
                        $image = Image::useImageDriver(ImageDriver::Gd)
                            ->loadFile($file->getRealPath())
                            ->optimize()
                            ->fit(Fit::Max, 1000, 600)
                            // set $prefixWithFormat to false to not prefix the image with the format
                            ->base64('webp', false);

                        // store the image in in 'do' storage disk
                        Storage::disk('do')->put($imagePath, base64_decode($image));

                        return $imagePath;
                    }),

                TextInput::make('author')
                    ->maxLength(255),

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
                TextColumn::make('slug')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->disk('do'),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
