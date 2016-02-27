<?php

use App\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
          'nik' => '12345',
          'password' => Hash::make('12345'),
          'name' => 'Heru Joko',
          'jabatan' => 'System Administrator'
        ]);
    }

}
