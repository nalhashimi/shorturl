<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PurgeExpiredLinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:purge-expired-links';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        echo 'app:purge-expired-links';
    }
}
