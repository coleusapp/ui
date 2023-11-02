<?php

namespace Coleus\Ui\Commands;

use Illuminate\Console\Command;

class UiCommand extends Command
{
    public $signature = 'ui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
