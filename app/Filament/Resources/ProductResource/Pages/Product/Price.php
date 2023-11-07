<?php

namespace App\Filament\Resources\ProductResource\Pages\Product;

use App\Filament\Resources\ProductResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Log;

class Price extends ListRecords
{
    protected static string $resource = ProductResource::class;

    public function getPriceSources($product_id)
    {
        Log::debug('called price');
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
