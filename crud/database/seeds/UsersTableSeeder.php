<?php

use Illuminate\Database\Seeder;
use App\UserModel;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserModel::class,10)->create();
    }
}
