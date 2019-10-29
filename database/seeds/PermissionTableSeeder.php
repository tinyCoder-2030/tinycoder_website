<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = Role::create(['name' => 'admin']);
        $student = Role::create(['name' => 'student']);
       $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'workshop-list',
           'workshop-create',
           'workshop-edit',
           'workshop-delete'
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }

$student_permissions = [1];
$admin->syncPermissions(Permission::all());
$student->syncPermissions($student_permissions);


    }
}