<?php

namespace App\Filament\Widgets;

use App\Models\Chat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class ChatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(__('dashboard.chats'), Number::forHumans(Chat::count())),
        ];
    }
}
