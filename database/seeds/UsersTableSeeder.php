<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
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
        $driverRole = Role::where('name', 'driver')->first();
        $userRole = Role::where('name', 'user')->first();


        $admin = User::create([
            'name' => 'Admin User',
            'phone'=> '07067828916',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

 
        $driver = User::create([
            'name' => 'Driver User',
            'phone'=> '09067828961',
            'email' => 'driver@driver.com',
            'password' => Hash::make('password'),
        ]);
      
        $user = User::create([
            'name' => 'Generic User',
            'phone'=> '08067828619',
            'email' => 'customer@test.com',
            'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $driver->roles()->attach($driverRole);
        $user->roles()->attach($userRole);
    }
}