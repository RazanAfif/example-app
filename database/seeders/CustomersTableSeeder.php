<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Rudi',       
            'phone_number' => '0000 0000 0000',       
            'gender' => 'Laki-laki'   
        ]);
        Customer::create([
            'name' => 'Budi',       
            'phone_number' => '1111 1111 1111',       
            'gender' => 'Laki-laki'   
        ]);
    }
}
