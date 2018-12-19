<?php

use Illuminate\Database\Seeder;
use App\Model\Rate;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rate::class, 50)->create();
     
    }
}
