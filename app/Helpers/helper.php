<?php
namespace App\Helpers;

use App\Models\Menu;
use Spatie\Permission\Models\Role;

class Helper
{
    public static function getMenuByRole($role)
    {
        $roleId = Helper::getIdRoleByName($role);

        // $menus = Menu::with(['roles' => function($query) use ($roleId){
        //     return $query->where('menu_role.role_id', $roleId);
        // }])->get();
        $menus = Menu::with('roles')
            ->whereHas('roles', function ($query) use ($roleId) {
                return $query->where('role_id', $roleId);
            })->get();

        return $menus;
    }

    public static function getIdRoleByName($roleName)
    {
        return Role::where('name', $roleName)->first()->id;
    }
}