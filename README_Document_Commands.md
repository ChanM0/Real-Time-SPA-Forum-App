# Real time single page forum app

## Made with Pusher, Laravel, VueJs, Vuetify, JWT, and markdown.

---

# BE - Laravel : 01-Make-Migrations

## Make Migrations Branch

-   we need to make migrations for
    -   questions
    -   replies
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

---

# BE - Laravel : 02-Relationships

## Make relationships

-   we need to make relationships for
    -   question
    -   reply
    -   like

### Edit files

    - App/Models
        - Question.php
        - Reply.php
    - App
        - User.php

---

# BE - Laravel : 03-Routes

## Make Routes - Question

### Commands

    - ```php artisan route:list```

---

# BE - Laravel : 04-Factories

## Make Factories

---

# BE - Laravel : 05-CRUD-Question

## Make CRUD - Question

## Resource Question implementation

#### Commands

    - ```php artisan make:resource QuestionResource ```

---

# BE - Laravel : 07-CRUD-Reply

## Make CRUD - Question

## Resource Question implementation

#### Commands

    - ```php artisan make:resource CategoryResource ```
    - ```php artisan make:resource ReplyResource ```

---

---

# BE - Laravel : 09-set-up-jwt

## Composer.json

    - "tymon/jwt-auth": "1.0.0-rc.2"

## Commands

    - composer install
    - php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
    - php artisan jwt:secret

    - php artisan make:controller AuthController

---

# BE - Laravel : 10-JWT-middle-ware

## Commands

    - php artisan make:middleware JWT

---

# FE - VUE : 11-Vuetify-and-Components

## Commands

    - npm install vuetify --save
    - npm install
    - npm run watch

---

# FE - VUE : 11-vue-router

## Commands

    - npm install vue-router --save
    - npm install
    - npm run watch

---
