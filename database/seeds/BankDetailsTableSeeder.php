<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BankDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\BankDetail::class, 20)->create();
    }
}
