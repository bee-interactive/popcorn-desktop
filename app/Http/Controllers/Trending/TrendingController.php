<?php

namespace App\Http\Controllers\Trending;

use Illuminate\View\View;

class TrendingController
{
    public function __invoke(): View
    {
        return view('trending.index');
    }
}
