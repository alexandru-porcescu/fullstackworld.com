<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

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
        app('sentry')->captureMessage('bbbb');

        Log::alert('Sent alert message on '. date('yyyy-mm-dd h:i:s'));

        $this->info('Sync successfully finished!');
    }
}
