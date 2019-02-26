<?php

namespace roennie91\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
        'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke() : string
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
