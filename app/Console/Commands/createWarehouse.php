<?php

namespace App\Console\Commands;

use App\Models\Warehouse;
use Illuminate\Console\Command;

class createWarehouse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:warehouse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Default user for Testing Warehouse';



    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Warehouse::create([
            'users_id' => 1,
            'name' => 'Main Warehouse',
            'location' => 'Faisalbad',
        ]);
        
        return $this->info('New Warehouse Created Successfully');
    }
}
