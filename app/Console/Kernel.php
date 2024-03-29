<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected function schedule(Schedule $schedule)
    {

        info("schedule-run command is running fine!");
        
        $schedule->command('generate:attendance')->dailyAt('09:00');
        $schedule->command('generate:attendance')->dailyAt('11:00');
        $schedule->command('generate:attendance')->dailyAt('01:00');
        $schedule->command('generate:attendance')->dailyAt('18:00');
        $schedule->command('mail:daily-attendance')->dailyAt('09:30');
        $schedule->command('daily:ctc')->hourly()->between('9:00', '22:00');
        $schedule->command('user:termination')->daily()->at('22:00')->withoutOverlapping()->runInBackground()->onOneServer();
    }

    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');
        require base_path('routes/console.php');
    }

    protected function scheduleTimezone()
    {
        return 'Asia/Kolkata';
    }
}
