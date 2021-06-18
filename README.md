## About Blog Api

-   It does the following:
-   Register with username and password (Username should be unique)
-   Login with username and password.
-   A logged in user can add, edit and delete their blogs.
-   All users including the not logged in ones can view all blogs.
-   Use jwt authentication.

## How to use it

-   Ensure your have install composer **[composer download](https://getcomposer.org/download/)** Then write _composer install_ on your terminal after navigating to the directory with the pulled repository
-   Pull the repo from github **[blog-api](https://github.com/edcheyjr/blog-api.git)**
-   Copy the contents in env.example to env
    -  The ```.env``` looks something like this
    ```
    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=
    APP_DEBUG=true
    APP_URL=http://localhost

    LOG_CHANNEL=stack
    LOG_LEVEL=debug

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    FILESYSTEM_DRIVER=local
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    MEMCACHED_HOST=127.0.0.1

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_MAILER=smtp
    MAIL_HOST=mailhog
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=null
    MAIL_FROM_NAME="${APP_NAME}"

    AWS_ACCESS_KEY_ID=
    AWS_SECRET_ACCESS_KEY=
    AWS_DEFAULT_REGION=us-east-1
    AWS_BUCKET=
    AWS_USE_PATH_STYLE_ENDPOINT=false

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_APP_CLUSTER=mt1

    MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
    ```

    -  Change you **DB_CONNECTION** to look like this in order to use sqlite database ```DB_CONNECTION=sqlite``` and delete all the other starting with `DB` 
    - Alternatively, make neccessary adjustment if using another management system database system by default it comes as mysql configured as show below:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
-   Generate your **APP_KEY** by typing this on your terminal ```php artisan key:generate```
-   Generate your **JWT** by typing this on your terminal ```php artisan jwt:secret```

-   ### Use **[postman](https://web.postman.co/)** to view endpoints
-   Use **[postman](https://web.postman.co/)** or any other platform for API development to view endpoints

## End Points

##### Register

<img src="/img/register.png">


##### Login  

 <img src="/img/login.png">


##### Get Logged In User

<img src="/img/getting_user.png">  


##### View Blog

<img src="/img/viewing_the_blogs.png">


##### View Single Blog

<img src="/img/blog.png">  


##### View All Blogs

<img src="/img/all_view.png">


##### Creating Blog

<img src="/img/creating_blog.png">

##### Update Blog  

 <img src="/img/updating_blog.png">

##### Deleting Blog

<img src="/img/deleting_a_blog.png">

