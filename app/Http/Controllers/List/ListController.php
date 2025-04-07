<?php

namespace App\Http\Controllers\List;

use Illuminate\View\View;

class ListController
{
    public function __invoke(): View
    {
        return view('list.index');
    }
}
