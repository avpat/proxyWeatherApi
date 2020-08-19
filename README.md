

#proxy Weather Api

***

**Table of Contents**

* [Presentation](#presentation)


<a id="presentation"></a>
## Presentation
Coding Task

Objective

The objective of this task is design, implement and test a RESTful API that serves as a proxy to an existing weather API. We recommend openweathermap.org but feel free to use any other public API.

We should be able to get the temperatures for a city by a city code (e.g. LDN for London) or by a country code which will return the temperature for the capital of that country (e.g. US for United States, GB for Great Britain)

The proxy API should get the temperatures in Celsius from the 3rd party API and display them in Celsius, Kelvin and Fahrenheit.


<a id="prerequisites"></a>
## Prerequisites

If you're using Mac OS, you will need:
* You will need to install [Docker](https://store.docker.com/editions/community/docker-ce-desktop-mac)

If you're using windows, you will need:
* [Docker toolbox](https://docs.docker.com/toolbox/toolbox_install_windows/) to use Docker and creating containers under windows
* put this whole folder inside `C/Users/Public` (to avoid having volume mounting issues)


<a id="the-installation"></a>
##Docker-compose Installation Notes

- Run a docker desktop on your machine
- Goto your root folder
- Run a docker build command and it should copy all the required images
`` docker-compose build && docker-compose up -d``
- Check if the docker container is running with following command
``docker-compose ps``
- If any issue occurs execute ``docker-compose down -v `` and then once again execute `` docker-compose build && docker-compose up -d``
- if any issue occurs check folder perssions from the docker desktop
- if everything ok then execute ``docker-compose exec php php artisan config:cache``


##Migrate and seed database
- The factory and migration files are provided along with this repo
- to run the migrations, run 
* ``docker-compose exec php php artisan migrate``
- Then seed
* ``    docker-compose exec php php artisan db:seed``

If you face any issue with migrate and seeding then follow these steps
- Rollback 
* ``docker-compose exec php php artisan migrate:rollback``
* ``composer dump-autoload``
* ``docker-compose exec php php artisan migrate:refresh --seed``

***
