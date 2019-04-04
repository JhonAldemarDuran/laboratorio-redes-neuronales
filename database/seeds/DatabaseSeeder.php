<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'usuario']);
        $role = Role::create(['name' => 'administrador']);  

        factory(App\User::class)->create(['email'=>'jhon@gmail.com'])->each(function ($user) {
            $user->assignRole('administrador');
        });
        factory(App\User::class)->create(['email'=>'maycol@gmail.com'])->each(function ($user) {
            $user->assignRole('usuario');
        });
    }
}
