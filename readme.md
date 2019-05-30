<p align="center">
<img src="https://fullstackworld.com/img/logo/main.png" width="300px">
</p>



# FullStack Community

[![Author](http://img.shields.io/badge/author-@fullstack_world-blue.svg?style=flat-square)](https://twitter.com/fullstack_world)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/fullstackworld/fullstackworld.com/master.svg?style=flat-square)](https://travis-ci.org/fullstackworld/fullstackworld.com)
[![StyeCI](https://github.styleci.io/repos/188183391/shield)](https://github.styleci.io/repos/188183391/shield)

Welcome to the [fullstackworld.com](https://fullstackworld.com) codebase. We are so excited to have you here.

## What is FullStackWorld.com anyway?
[fullstackworld.com](https://fullstackworld.com) is a platform developers help each others with the stories. We believe web is becoming more & more full stack development, so instead of World Wide Web why not Full Stack World?


## Prerequisite

- `PHP V7.2+` installed on your system
- Homestead prerequisite must be matching already. [This](https://laravel.com/docs/5.8/homestead#installation-and-setup) is how you can do it.

## How to setup?

- Git clone this repository
- `cp .env.example .env`
- `composer install`
- `vagrant up`
- After vagrant setup done, do `vagrant ssh` & `cd code && php artisan migrate --seed`
- Add entry of host in your hosts `192.168.11.11  fullstackworld.test`
- Visit `fullstackworld.test`
- Login Page: `fullstackworld.test/wink`
    - Credentials:
        - Email: `hello@fullstackworld.com`
        - Password: `secret`
