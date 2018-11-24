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

### Commands

---
