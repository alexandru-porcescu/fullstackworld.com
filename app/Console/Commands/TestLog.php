<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestLog extends Command
{
    protected $signature = 'test:log';

    protected $description = 'Test Log';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        app('sentry')->captureMessage('Cron test run on '. date('Y-m-d h:i:s'));

        $this->info('Sync successfully finished!');
    }
}
