#!/usr/bin/env bash

[[ -d vendor ]] || composer install
php artisan code:analyse --level=max
