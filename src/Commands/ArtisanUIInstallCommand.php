<?php

namespace Lorisleiva\ArtisanUI\Commands;

use Illuminate\Console\Command;

class ArtisanUIInstallCommand extends Command
{
    public $signature = 'artisan-ui:install';
    public $description = 'Publishes all necessary assets and configurations';

    public function handle()
    {
        $this->info('Done!');
    }
}
