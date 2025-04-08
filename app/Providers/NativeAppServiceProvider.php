<?php

namespace App\Providers;

use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Facades\Window;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Window::open()
            ->hideMenu(false)
            ->title('Popcorn')
            ->showDevTools(false)
            ->width(1280)
            ->height(768)
            ->minWidth(1280)
            ->minHeight(768)
            ->rememberState()
            ->titleBarHidden();
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
            'memory_limit' => '2048M',
            'display_errors' => 1,
        ];
    }
}
