<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected $commands = [

    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('check:expires')->dailyAt('08:30');
        $schedule->command('send:gratEmail')->dailyAt('09:00');
        // $schedule->command('plus:annualLeave')->dailyAt('00:00');
        $schedule->command('reset:annualLeave')->yearlyOn(1, 1, '00:00');
        $schedule->command('check:activePayroll')->dailyAt('00:00');
        // $schedule->command('sync:time_sheets')->dailyAt('00:00');
        $schedule->command('sync:time_sheets')->everyTenMinutes();
        $schedule->command('plus:annualLeave')->everyTenMinutes();
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
