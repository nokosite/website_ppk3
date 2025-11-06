<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;

class UpdateUserRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:update-role 
                            {email : Email address of the user}
                            {--role=super_admin : Role name to assign}
                            {--remove : Remove role instead of assign}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update user role for Filament Shield access';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        $roleName = $this->option('role');
        $remove = $this->option('remove');

        // Find user
        $user = User::where('email', $email)->first();

        if (!$user) {
            $this->error("User with email '{$email}' not found!");
            return Command::FAILURE;
        }

        // Find or create role
        $role = Role::firstOrCreate(
            ['name' => $roleName, 'guard_name' => 'web']
        );

        if ($remove) {
            // Remove role
            if ($user->hasRole($roleName)) {
                $user->removeRole($roleName);
                $this->info("Role '{$roleName}' removed from user '{$email}'");
            } else {
                $this->warn("User '{$email}' does not have role '{$roleName}'");
            }
        } else {
            // Assign role
            $user->assignRole($roleName);
            $this->info("Role '{$roleName}' assigned to user '{$email}'");
        }

        // Show current roles
        $currentRoles = $user->fresh()->roles->pluck('name')->toArray();
        $this->line("Current roles: " . implode(', ', $currentRoles ?: ['none']));

        return Command::SUCCESS;
    }
}
