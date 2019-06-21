<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class OnlineUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:online_update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '上线更新';

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
        \App\Services\OnlineUpdate::updateBooks();
    }
}
