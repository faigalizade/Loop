<?php

namespace App\Providers;

use App\Core\View;

class ViewProvider implements Provider
{
    public function boot()
    {
        // TODO make Blade
        new View(null);
    }
}