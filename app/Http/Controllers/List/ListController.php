<?php

namespace App\Http\Controllers\List;

use App\Helpers\Help;
use Illuminate\View\View;

class ListController
{
    public function __invoke(string $uuid): View
    {
        $wishlist = Help::get('wishlists/'.$uuid);

        return view('list.index', [
            'wishlist' => $wishlist['data'],
        ]);
    }
}
