<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Role;


class AssignAdminRole extends Command
{
    protected $signature = 'role:assign-admin {user}';

    protected $description = 'Assign the admin role to a user';

    public function handle()
    {

        $userId = $this->argument('user');
        $user = User::find($userId);

        if (!$user) {
            $this->error('User not found.');
            return;
        }

        $adminRole = Role::where('name', 'admin')->first();

        if (!$adminRole) {
            $this->error('Admin role not found. Please create the role first.');
            
            return;
        }

        $user->roles()->sync([$adminRole->id]);

        $this->info('Admin role assigned to user successfully.');

    }
}
