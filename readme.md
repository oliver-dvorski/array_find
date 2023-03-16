Install the dependencies with `composer install`.

You can confirm that the program does what it should by running the `composer
test` script.

## Usage

```php
$people = [
  ['name' => 'John', 'age' => 20],
  ['name' => 'Jane', 'age' => 21],
  ['name' => 'Jack', 'age' => 22],
];

// Returns ['name' => 'Jane', 'age' => 21]
$found = array_find($people, fn($item) => $item['name'] === 'Jane');
```
