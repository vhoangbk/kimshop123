<?php

use Illuminate\Database\Seeder;
use \App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->truncate();
        for ($i=0; $i<10; $i++){
            Customer::create([
                'name' => 'linhn nguyen'.$i,
                'phone' => '099765342'.$i,
                'address' => 'Nam Định',
            ]);
            Customer::create([
                'name' => 'hung nguyen'.$i,
                'phone' => '09876'.$i.'342'.$i,
                'address' => 'Ha nam',
            ]);
        }

    }
}
