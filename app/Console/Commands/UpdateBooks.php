<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:update_books';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update_books';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \App\Services\UpdateBooks::DealEarlyChapters();
//        \App\Services\UpdateBooks::DealEarlyBooks();
    }
}
