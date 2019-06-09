<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    public function run()
    {
        $r = 0 . '-' . 10;
        $commentRange = $this->command->ask('How many comments per film do you need ?', $r);

        $films = App\Models\Film::all();

        $this->command->info("Creating a range of {$commentRange} comments for {$films->count()} films .");

        $films->each(function($film) use ($commentRange){
            factory(App\Models\Comment::class, $this->count($commentRange))
                ->create([
                       'film_id' => $film->id,
                       'user_id' => App\Models\User::all()->random()->id
                    ]);
        });

        $this->command->info('Comments Created!');

    }

      // Return random value in given range
    function count($range)
    {
        return rand(...explode('-', $range));
    }
}
