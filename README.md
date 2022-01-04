# Extraction

A PHP function to safely extract information from a multi-dimensional object or array.

## Install

Normall install via Composer.

## Usage

```php
$array = array(
    'foo' => array(
        'bar' => array(
            'foo' => array(
                'bar' => 'asdf'
            )
        )
    )
);

$value = ex($array, 'foo.bar.foo.bar'); // returns "asdf"
$value = ex($array, 'foo.bar.foo.invalid_key'); // returns null
$value = ex($array, 'foo.bar.foo.invalid_key', 'default'); // returns "default"
```

## Updates

I added another helper function to safely count arrays:

```php
$array = null;
$count = excount($array); // returns 0 instead of error
```

I wanted this to fix a change in PHP 7.4 which breaks ``sizeof()``.