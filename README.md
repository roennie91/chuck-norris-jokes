# Chuck Norris Jokes

Generates random Chuck Norris Jokes which can be used within your PHP project.

## Installation

Require the package using composer

```bash
composer require roennie91/chuck-norris-jokes
```

## Usage

```php
use roennie91\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory;

$joke = $jokes->getRandomJoke();

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
