<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Bank::class, 20)->create();
    }
}
