<?php

namespace App\Livewire\Wishlist;

use App\Helpers\Help;
use Livewire\Component;
use Livewire\Attributes\On;

class UserWishlists extends Component
{
    #[On('data-updated')]
    public function render()
    {
        $wishlists = Help::get('wishlists');

        return view('livewire.wishlist.user-wishlists', [
            'wishlists' => $wishlists,
        ]);
    }
}
