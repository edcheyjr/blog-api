

## About Blog Api

- It does the following:
 - Register with username and password (Username should be unique)
 - Login with username and password.
 - A logged in user can add, edit and delete their blogs.
 - All users including the not logged in ones can view all blogs.
 - Use jwt authentication.

## How to use it
- Ensure your have install composer **[composer download](https://getcomposer.org/download/)** Then write *composer install* on your terminal after navigating to the directory with the pulled repository
- Pull the repo from github **[https://github.com/edcheyjr/blog-api.git](https://github.com/edcheyjr/blog-api.git)**
 - Copy the in env.example to env
 - Change you **DB_CONNECTION** to look like this in order to use sqlite database **DB_CONNECTION=sqlite**
 - Generate your **APP_KEY** by typing this on your terminal *php artisan key:generate*
 - Generate your **JWT** by typing this on your terminal *php artisan jwt:secret*
 - Use **[postman](https://web.postman.co/)** to view endpoints


## End Points

*Register*
    <img src="/img/register.png">
*Login*   
    <img src="/img/login.png">
*Get Logged In User*
    <img src="/img/get_the_logged_in_user.png>    
*View Blog*
    <img src="/img/viewing_the_blogs.png">
*View Single Blog*
    <img src="/img/view_a_blog">    
*View All Blog by all users*
    <img src="/img/all_view.png">
*Creating Blog*
    <img src="/img/creating_blog.png">
*Update Blog*
    <img src="/img/updating_blog.png">
*Deleting Blog*
    <img src="/img/deleting_a_blog.png">    

    


