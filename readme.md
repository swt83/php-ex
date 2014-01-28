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