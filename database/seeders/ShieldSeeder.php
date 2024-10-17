<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use BezhanSalleh\FilamentShield\Support\Utils;
use Spatie\Permission\PermissionRegistrar;

class ShieldSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[{"name":"super_admin","guard_name":"web","permissions":["view_application","view_any_application","create_application","update_application","restore_application","restore_any_application","replicate_application","reorder_application","delete_application","delete_any_application","force_delete_application","force_delete_any_application","view_article","view_any_article","create_article","update_article","restore_article","restore_any_article","replicate_article","reorder_article","delete_article","delete_any_article","force_delete_article","force_delete_any_article","view_contact::message","view_any_contact::message","create_contact::message","update_contact::message","restore_contact::message","restore_any_contact::message","replicate_contact::message","reorder_contact::message","delete_contact::message","delete_any_contact::message","force_delete_contact::message","force_delete_any_contact::message","view_location","view_any_location","create_location","update_location","restore_location","restore_any_location","replicate_location","reorder_location","delete_location","delete_any_location","force_delete_location","force_delete_any_location","view_role","view_any_role","create_role","update_role","delete_role","delete_any_role","view_user","view_any_user","create_user","update_user","restore_user","restore_any_user","replicate_user","reorder_user","delete_user","delete_any_user","force_delete_user","force_delete_any_user","view_vacancy","view_any_vacancy","create_vacancy","update_vacancy","restore_vacancy","restore_any_vacancy","replicate_vacancy","reorder_vacancy","delete_vacancy","delete_any_vacancy","force_delete_vacancy","force_delete_any_vacancy","page_ManageContact","page_ManageGeneral"]},{"name":"Recruiter","guard_name":"web","permissions":["view_application","view_any_application","create_application","update_application","restore_application","restore_any_application","replicate_application","reorder_application","delete_application","delete_any_application","force_delete_application","force_delete_any_application","view_vacancy","view_any_vacancy","create_vacancy","update_vacancy","restore_vacancy","restore_any_vacancy","replicate_vacancy","reorder_vacancy","delete_vacancy","delete_any_vacancy","force_delete_vacancy","force_delete_any_vacancy"]},{"name":"Writer","guard_name":"web","permissions":["view_article","view_any_article","create_article","update_article","restore_article","restore_any_article","replicate_article","reorder_article","delete_article","delete_any_article","force_delete_article","force_delete_any_article"]}]';
        $directPermissions = '[]';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {
            /** @var Model $roleModel */
            $roleModel = Utils::getRoleModel();
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = $roleModel::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name'],
                ]);

                if (! blank($rolePlusPermission['permissions'])) {
                    $permissionModels = collect($rolePlusPermission['permissions'])
                        ->map(fn ($permission) => $permissionModel::firstOrCreate([
                            'name' => $permission,
                            'guard_name' => $rolePlusPermission['guard_name'],
                        ]))
                        ->all();

                    $role->syncPermissions($permissionModels);
                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions, true))) {
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($permissions as $permission) {
                if ($permissionModel::whereName($permission)->doesntExist()) {
                    $permissionModel::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}
