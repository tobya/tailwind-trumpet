<?php

namespace Tobya\TailwindTrumpet\Commands;

use Illuminate\Console\Command;
use Tobya\TailwindTrumpet\TailwindTrumpet;

class TailwindTrumpetCommand extends Command
{
    public $signature = 'trumpet:expose';

    public $description = 'Expose any tailwind classes uses by classes via Trumpet';

    public function handle(): int
    {
        (new TailwindTrumpet)->generate();
        $this->comment('All done');

        return self::SUCCESS;
    }
}
