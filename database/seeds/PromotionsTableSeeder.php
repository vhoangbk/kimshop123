<?php

use Illuminate\Database\Seeder;
use \App\Models\Promotion;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->truncate();
        for($i= 1; $i<20; $i++){
            Promotion::create([
                'name' => 'Khuyến mại '.$i,
                'code' => 'KM'.$i,
            ]);
        }

    }
}
