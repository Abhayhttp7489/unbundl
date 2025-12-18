<?php

namespace App\Filament\Resources\CarInquiryResource\Pages;

use App\Filament\Resources\CarInquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCarInquiry extends ViewRecord
{
    protected static string $resource = CarInquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

