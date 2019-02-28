<?php

namespace roennie91\ChuckNorrisJokes\Console;

use Illuminate\Console\Command;

use roennie91\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';

    protected $description = 'Output a funny Chuck Norris joke';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}
