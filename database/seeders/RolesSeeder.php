<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Perfil;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Obtometrista']);
        $role2 = Role::create(['name' => 'Jefe de ventas']);

        $role3 = Role::create(['name' => 'cliente']);
     
        $role5 = Role::create(['name' => 'Gerente Administrativo']);
        $role6 = Role::create(['name' => 'Laborista optico']);
        $role7 = Role::create(['name' => 'SuperAdmin']);
         
        Permission::create(['name' => 'superadmin'])->syncRoles([$role7 , $role1]);
        Permission::create(['name' => 'admin'])->syncRoles([$role1 , $role2 , $role7]);
        Permission::create(['name' => 'user'])->syncRoles([$role1 , $role2, $role3 , $role7]);

       $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456789'),
            'telefono' => '+58 426 382 1517',
           
        ])->assignRole('SuperAdmin');

        Perfil::create([
            'cedula' => '26101877',
            'edad' => '26',
            'direccion'=> "",
            'sexo' => 'Masculino',
            'id_user' => $user->id,
            'fecha_nacimiento'=> '',
            'imagen' => 'avatars/avatar.png'
        ]);
    }
}
