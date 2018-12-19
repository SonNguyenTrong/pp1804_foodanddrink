<?php

use Illuminate\Database\Seeder;
use App\Model\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class, 50)->create();
    }
}
