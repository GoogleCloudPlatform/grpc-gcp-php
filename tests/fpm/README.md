PHP-FPM test is used to verify that channel created by script1 can be fetched by
script2. It can be run inside browser or by commands in terminal.
```
curl -o - 'tests/fpm/session_unset.php'
curl -o - 'tests/fpm/php-fpm1.php'
curl -o - 'tests/fpm/php-fpm2.php'
```
`session_unset.php` is clear all items inside current worker process.
`php-fpm1.php` creates 2 channels and update active streams with each channel.
`php-fpm2.php` can fetch 2 channels created by `php-fpm1.php` and use them.

