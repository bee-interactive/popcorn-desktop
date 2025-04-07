<?php

namespace App\Http\Controllers\ViewedItems;

use Illuminate\View\View;

class ViewedItemsController
{
    public function __invoke(): View
    {
        return view('viewed.index');
    }
}
