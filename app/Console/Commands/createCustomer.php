<?php

namespace App\Console\Commands;

use App\Models\Customer;
use Illuminate\Console\Command;

class createCustomer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:customer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Demo Customer in Database';



    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Customer::create([
            'users_id' => 1,
            'name' => 'Abdul Hameed',
            'email' => 'abdul@hameed.com',
            'phone' => '+92-3004545456',
            'address' => 'Qadri Darbar, Street #6, Gojra',
        ]);
        return $this->info('New Customer Created Successfully');
    }
}
