<?php

namespace Stephenmorlex\LaravelBasicPackage\Commands;

use Illuminate\Console\Command;

class LaravelBasicPackageCommand extends Command
{
    public $signature = 'laravel-basic-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
