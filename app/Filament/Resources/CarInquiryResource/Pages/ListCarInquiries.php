<?php

namespace App\Filament\Resources\CarInquiryResource\Pages;

use App\Filament\Resources\CarInquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarInquiries extends ListRecords
{
    protected static string $resource = CarInquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}

