# Real time single page forum app

## Made with Pusher, Laravel, VueJs, Vuetify, JWT, and markdown.

---

# BE - Laravel : 01-Make-Migrations

## Make Migrations Branch

-   we need to make migrations for
    -   questions
    -   replys
    -   categories
    -   likes

### Commands

    - ```php artisan make:model Models/Question -mfr```
        -  makes model, migration, factory, resource controller.
    - ``` php artisan make:provider QuestionServiceProvider```
        - makes a service provider, implemented contract service flow
            - made a contract, service, and connected them in config/app.php

    - ```php artisan make:model Models/Reply -mfr```
        -  makes model, migration, factory, resource controller.
    - ``` php artisan make:provider ReplyServiceProvider```
        - makes a service provider, implemented contract service flow
            - made a contract, service, and connected them in config/app.php

    - ```php artisan make:model Models/Category -mfr```
        -  makes model, migration, factory, resource controller.
    - ``` php artisan make:provider CategoryServiceProvider```
        - makes a service provider, implemented contract service flow
            - made a contract, service, and connected them in config/app.php

    - ```php artisan make:model Models/Like -mfr```
        -  makes model, migration, factory, resource controller.
    - ``` php artisan make:provider LikeServiceProvider```
        - makes a service provider, implemented contract service flow
            - made a contract, service, and connected them in config/app.php
