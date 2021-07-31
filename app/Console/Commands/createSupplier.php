<?php

namespace App\Console\Commands;

use App\Models\Supplier;
use Illuminate\Console\Command;

class createSupplier extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:supplier';

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
        Supplier::create([
            'users_id' => 1,
            'fname' => 'Ghulam',
            'lname' => 'Hussian',
            'email' => 'ghulam@hussain.com',
        ]);
        return $this->info('New Supplier Created Successfully');
    }
}
