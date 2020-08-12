

# MANGAHIGH - coding test

***

**Table of Contents**

* [Presentation](#presentation)
* [Prerequisites](#prerequisites)
* [About your implementation](#about-your-implementation)
* [Your dev environment](#your-dev-environment)
* [The task](#the-task)
* [About you](#about-you)
    * [Your comments](#your-comments) (optional)


<a id="presentation"></a>
## Presentation
Coding Task

Objective

The objective of this task is design, implement and test a RESTful API that serves as a proxy to an existing weather API. We recommend openweathermap.org but feel free to use any other public API.

We should be able to get the temperatures for a city by a city code (e.g. LDN for London) or by a country code which will return the temperature for the capital of that country (e.g. US for United States, GB for Great Britain)

The proxy API should get the temperatures in Celsius from the 3rd party API and display them in Celsius, Kelvin and Fahrenheit.

Implementation
PHP (you may use any available open source packages through composer)

Deadline
Send the zipped source via email to me or upload it to a version control repository hosting service like Github, Bitbucket or other by the end of Sunday 9th of August. Please ensure you CC valter.cunha@mangahigh.com in your answer.

<a id="prerequisites"></a>
## Prerequisites

If you're using Mac OS, you will need:
* You will need to install [Docker](https://store.docker.com/editions/community/docker-ce-desktop-mac)

If you're using windows, you will need:
* [Docker toolbox](https://docs.docker.com/toolbox/toolbox_install_windows/) to use Docker and creating containers under windows
* put this whole folder inside `C/Users/Public` (to avoid having volume mounting issues)

<a id="about-your-implementation"></a>
## About your implementation

* Fill the [About you](#about-you) section below.
* If you have any notes to add to your test, please add them in the [Your comments](#your-comments) section below.
* Send a zip file with your completed entry to [peter.ward@pod-point.com](mailto:peter.ward@pod-point.com).

<a id="your-dev-environment"></a>


***

<a id="about-you"></a>
## Applicant

* **First name:** `Abhijeet`
* **Last name:** `Patil`


<a id="your-comments"></a>
### Your comments (optional)

* The test was fun to work on. Thanks for the opportunity 
* It took approximately 10 hours
* 
* Ideally, I would use Apiresources but due to fraamework error and time limits I haad to remove it


















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
