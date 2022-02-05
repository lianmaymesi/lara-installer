<?php

namespace Lianmaymesi\LaraInstaller\Commands;

use Illuminate\Console\Command;

class LaraInstallerCommand extends Command
{
    public $signature = 'lara-installer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
