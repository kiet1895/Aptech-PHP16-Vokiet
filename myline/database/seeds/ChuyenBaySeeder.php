<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ChuyenBaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Model::unguard();
        $this->call(ChuyenBay::class);
        Model::reguard();
    }
}
