<?php

namespace App\Filament\Resources\ProductResource\Pages\Product;

use App\Filament\Resources\ProductResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\TextInput;

class Stock extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected static string $view = 'filament.resources.product-resource.pages.product.stock';


    public function getStockSources($product_id)
    {
        return [
            TextInput::make('quantity')
                ->label('Quantity')
                ->numeric()
                ->required(),

                TextInput::make('price')
                ->label('Price')
                ->numeric()
                ->required(),
        ];
    }

    public function updateStock($data): void
    {
        
    }
}
