<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(100)
            ->create()
            ->each(function (User $user) {
                UserDomicilio::factory()
                    ->create([
                        'user_id' => $user->id
                    ]);
            });
    }
}
