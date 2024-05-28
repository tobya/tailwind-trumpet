<?php

namespace Tobya\TailwindTrumpet\Commands;

use Illuminate\Console\Command;

class TailwindTrumpetCommand extends Command
{
    public $signature = 'tailwind-trumpet';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
