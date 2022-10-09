<?php

namespace App\Console;

use App\Console\Commands\SendMessage;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        Commands\SendMessage::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command('queue:work --daemon')->twiceMonthly(1, 15, '00:00')->withoutOverlapping();
        //$schedule->command('queue:work --daemon')->twiceDaily(3, 13)->withoutOverlapping();
        $schedule->command('queue:work --daemon')->everyMinute()->withoutOverlapping();

        //$schedule->command('emails:work')->everyMinute()->withoutOverlapping();
    }


    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
