<?php

namespace Kamaroolkarim\Windle\Commands;

use Illuminate\Console\Command;

class WindleCommand extends Command
{
    public $signature = 'windle';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
