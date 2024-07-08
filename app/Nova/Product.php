<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Product>
     */
    public static $model = \App\Models\Product::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            // ID::make()->sortable(),
            // Slug::make(name:'Slug')->from(from:'name')
            Slug::make('Slug of Product', 'slug')
            ->from('name')
            ->required()
            ->hideFromIndex()
            ->withMeta(['extraAttributes' => [
                'readonly' => true
            ]]),
            Text::make('Name')
            ->showOnPreview()
            ->required()
            ->placeholder('Product name...')->sortable(),
            Markdown::make('Description')
            ->showOnPreview()
            ->required(),
            Currency::make('Price')
            ->textAlign('left')
            ->sortable()
            ->placeholder('Enter product price...')
            ->showOnPreview()
            ->required(),
            Text::make('Sku')
            ->placeholder('Enter product SKU...')
            ->help('Number that retailers use to differentiate products and track inventory levels.')
            ->sortable()
            ->required(),
            Number::make('Quantity')
            ->placeholder('Enter Quantity...')
            ->showOnPreview()
            ->textAlign('left')
            ->sortable()
            ->required(),
            Boolean::make('Status', 'is_published')
            ->showOnPreview()
            ->textAlign('left')
            ->sortable()
            ->required(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
