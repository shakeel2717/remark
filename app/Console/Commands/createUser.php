<?php

namespace App\Console\Commands;

use App\Models\users;
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
        return $this->info('New User Created Successfully');
    }
}
