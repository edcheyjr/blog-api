## About Blog Api

-   It does the following:
-   Register with username and password (Username should be unique)
-   Login with username and password.
-   A logged in user can add, edit and delete their blogs.
-   All users including the not logged in ones can view all blogs.
-   Use jwt authentication.

## How to use it

-   Ensure your have install composer **[composer download](https://getcomposer.org/download/)** Then write _composer install_ on your terminal after navigating to the directory with the pulled repository
-   Pull the repo from github **[https://github.com/edcheyjr/blog-api.git](https://github.com/edcheyjr/blog-api.git)**
-   Copy the in env.example to env
-   Change you **DB_CONNECTION** to look like this in order to use sqlite database **DB_CONNECTION=sqlite**
-   Generate your **APP_KEY** by typing this on your terminal _php artisan key:generate_
-   Generate your **JWT** by typing this on your terminal _php artisan jwt:secret_
    <<<<<<< HEAD
-   Start server _php artsan serve_
-   # Use **[postman](https://web.postman.co/)** to view endpoints
-   Use **[postman](https://web.postman.co/)** or any other platform for API development to view endpoints
    > > > > > > > 14f8ebdb31131803b5a7144e185b5103d4a706b8

## End Points

Register
<img src="/img/register.png">
Login  
 <img src="/img/login.png">
Get Logged In User
<img src="/img/getting_user.png">  
View Blog
<img src="/img/viewing_the_blog.png">
View Single Blog
<<<<<<< HEAD
<img src="/img/blog.png">  
=======
<img src="/img/view_blog">

> > > > > > > 14f8ebdb31131803b5a7144e185b5103d4a706b8
> > > > > > > View All Blog by all users

    <img src="/img/all_view.png">

Creating Blog
<img src="/img/creating_blog.png">
Update Blog  
 <img src="/img/updating_blog.png">
Deleting Blog
<img src="/img/deleting_a_blog.png">
