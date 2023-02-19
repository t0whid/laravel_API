<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
        ->count(25)
        ->hasInvoices(25)
        ->create();

        
        Customer::factory()
        ->count(100)
        ->hasInvoices(10)
        ->create();

        Customer::factory()
        ->count(100)
        ->hasInvoices(5)
        ->create();

        Customer::factory()
        ->count(5)
        ->create();

    }
}
