<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $employeeRole = Role::where('name', 'employee')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Ton User',
            "username" => 'Caocaosai',
            'password' => Hash::make('password@')
        ]);
        $employee = User::create([
            'name' => 'employee User',
            "username" => 'employee username',
            'password' => Hash::make('password@')
        ]);
        $user = User::create([
            'name' => 'User User',
            "username" => 'user username',
            'password' => Hash::make('password@')
        ]);

        //User.php function roles
        $admin->roles()->attach($adminRole);
        $employee->roles()->attach($employeeRole);
        $user->roles()->attach($userRole);
    }
}