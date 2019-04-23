<?php

namespace App\Console\Commands;

use App\Mail\CommandFinished;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

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

        /*Mail::to("mhetreramesh@gmail.com")->send(new CommandFinished());
        app('sentry')->captureMessage('Cron test run on '. date('Y-m-d h:i:s'));
        $this->info('Sync successfully finished!');*/
    }
}
