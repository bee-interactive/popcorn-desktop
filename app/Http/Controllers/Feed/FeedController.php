<?php

namespace App\Http\Controllers\Feed;

use Illuminate\View\View;

class FeedController
{
    public function __invoke(): View
    {
        return view('feed.index');
    }
}
