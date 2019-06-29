<?php

namespace App\Console\Commands;

use App\Services\serverToServer;
use Illuminate\Console\Command;

class StoS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'stos';

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
        serverToServer::index();
    }
}
