<?php

use Illuminate\Database\Seeder;

class PromotionCustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotion_customers')->truncate();
        \App\Models\PromotionCustomer::create([
            'promotion_id' => 1,
            'customer_id' => 1,
            'is_active' => 1,
            'status' => 0,
        ]);
    }
}
