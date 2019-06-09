<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many genres you need, defaulting to 10
        $count = (int)$this->command->ask('How many genres do you need ?', 10);

        $this->command->info("Creating {$count} genres.");

        // Create the Genre
        $genres = factory(App\Models\Genre::class, $count)->create();

        $this->command->info('Genres Created!');
    }
}
