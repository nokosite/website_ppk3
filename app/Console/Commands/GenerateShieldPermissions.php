<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GenerateShieldPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shield:generate-permissions {--panel=admin : Panel ID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Shield permissions for all resources, pages, and widgets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $panel = $this->option('panel');
        
        $this->info("Generating Shield permissions for panel: {$panel}");
        
        // Generate permissions for all entities
        Artisan::call('shield:generate', [
            '--all' => true,
            '--panel' => $panel,
            '--minimal' => true,
        ], $this->output);
        
        $this->info("Permissions generated successfully!");
        
        return Command::SUCCESS;
    }
}
