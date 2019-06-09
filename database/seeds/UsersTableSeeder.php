<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many users you need, defaulting to 10
        $count = (int)$this->command->ask('How many users do you need ?', 10);

        $this->command->info("Creating {$count} user(s).");

        // Create the Genre
        $genres = factory(User::class, $count)->create();

        $this->command->info('Users Created!');

    }
}