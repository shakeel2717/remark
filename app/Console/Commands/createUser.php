<?php

namespace App\Console\Commands;

use App\Models\Customer;
use App\Models\Supplier;
use App\Models\users;
use App\Models\Warehouse;
use Illuminate\Console\Command;

class createUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Default user for Testing Product';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        users::create([
            'fname' => 'Shakeel',
            'lname' => 'Ahmad',
            'username' => 'shakeel2717',
            'email' => 'shakeel2717@gmail.com',
            'password' => 'asdfasdf',
            'status' => 'Active',
        ]);

        // Creating Customer
        Customer::create([
            'users_id' => 1,
            'name' => 'Abdul Hameed',
            'email' => 'abdul@hameed.com',
            'phone' => '+92-3004545456',
            'address' => 'Qadri Darbar, Street #6, Gojra',
        ]);

        // Creating Supplire
        Supplier::create([
            'users_id' => 1,
            'fname' => 'Ghulam',
            'lname' => 'Hussian',
            'email' => 'ghulam@hussain.com',
        ]);

        // Creating Warehouse
        Warehouse::create([
            'users_id' => 1,
            'name' => 'Main Warehouse',
            'location' => 'Faisalbad',
        ]);
        return $this->info('Test Account Setup Successfully');
    }
}
