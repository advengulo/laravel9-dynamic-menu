<?php

namespace App\View\Composers;

use App\Helpers\Helper;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MenuComposer
{
    public function compose(View $view)
    {
        $userLogin = Auth::user();
        $userRole = $userLogin->getRoleNames()->first();

        $menus = Helper::getMenuByRole($userRole);

        $view->with('menus', $menus);
    }
}