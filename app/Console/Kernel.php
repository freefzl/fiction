<?php

namespace App\Console;


use App\Console\Commands\OnlineUpdate;
use App\Console\Commands\StoS;
use App\Console\Commands\UpdateBooks;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
//        OnlineUpdate::class,
//        UpdateBooks::class,
        StoS::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        /*$schedule->call(function () {

        })->daily();*/
//        $schedule->call(UpdateBooks::class)->daily();

//        $schedule->command('stos')->everyMinute();
        $schedule->command('update_books')->daily();

        $schedule->command('online_update')
            ->everyFiveMinutes()
            ->timezone('Asia/Shanghai')
            ->between('9:00', '12:00');

        $schedule->command('online_update')
            ->everyFiveMinutes()
            ->timezone('Asia/Shanghai')
            ->between('13:00', '18:00');

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
