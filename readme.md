<p align="center">
<img src="https://fullstackworld.com/img/logo/main.png" width="300px">
</p>



# FullStack Community

[![Author](http://img.shields.io/badge/author-@fullstack_world-blue.svg?style=flat-square)](https://twitter.com/fullstack_world)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/fullstackworld/fullstackworld.com/master.svg?style=flat-square)](https://travis-ci.org/fullstackworld/fullstackworld.com)
[![StyeCI](https://github.styleci.io/repos/188183391/shield)](https://github.styleci.io/repos/188183391/shield)

Welcome to the [fullstackworld.com](https://fullstackworld.com) codebase. We are so excited to have you here.

## What is FullStackWorld anyway?
[FullStackWorld](https://fullstackworld.com) is a platform developers help each others with the stories. We believe web is becoming more & more full stack development, so instead of World Wide Web why not Full Stack World? We consider ourselves a community driven dialogue in the pursuit of common goal for everyone.

From beginners to experts, everyone is welcome to find their place in the community.  


## Getting Started

Below requirements and quick-start guide is based on standards which we recommend. You are free to pick your own setup 👩‍💻.

### Prerequisite

- `PHP V7.2+` installed on your system
- [Homestead](https://laravel.com/docs/5.8/homestead#installation-and-setup) prerequisite must be matching already.

### Steps

1. Make sure the prerequisites are installed.
2. Git clone this repository(`git clone git@github.com:fullstackworld/fullstackworld.com.git`)
3. `cp .env.example .env`
4. `composer install`
5. `vagrant up`
6. After vagrant setup done, do `vagrant ssh` & `cd code && php artisan migrate --seed`
7. Add entry of host in your hosts `192.168.11.11  fullstackworld.test`
8. Visit `fullstackworld.test`
9. Login Page: `fullstackworld.test/wink`
    - Credentials:
        - Email: `hello@fullstackworld.com`
        - Password: `secret`
10. This is the basic website up & running. To explore all the features you will need to fill in your own credentials for required services in `.env` file.  
