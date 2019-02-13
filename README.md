# Standard Project for 
## About
I decieded to make standard project for me to make it easy to start new projects for any new client

## To Run
### You will need:
- xampp
- php v 7.*
- composer

## Setup / configuration
 1. clone Repo 
    - `git clone https://github.com/Eslam-Ayman/drive.git`
    - cd into your project
 2. Install Composer Dependencies
    - ```composer install```
 3. Install NPM Dependencies [OPTIONAL]
    - `npm install`
 4. Create a copy of your .env file
    - ```cp .env.example .env```
 5. Generate an app encryption key
    - ```php artisan key:generate```
    - If the application key is not set, your user sessions and other encrypted data will not be secure!
 6. Create an empty database for our application
 7. In the .env file, add database information to allow Laravel to connect to the database
 8. Migrate the database
    - `php artisan migrate`
    - if you don't need to migrate so import `drive.sql` in your DB
 9. [Optional]: Seed the database
    - `php artisan db:seed`
10. you must add mail configration in the `.env` file
    ```
    - MAIL_DRIVER=smtp
    - MAIL_HOST=mail.womendrive.net
    - MAIL_PORT=587
    - MAIL_USERNAME=noreply@womendrive.net
    - MAIL_PASSWORD=noreplynoreply
    - MAIL_ENCRYPTION=tls
    - MAIL_FROM_ADDRESS =noreply@womendrive.net
    - MAIL_FROM_NAME =WomenDrive
    ```

# Resources
 1. share variable in specific blades or all blades
    - https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5
    - https://laracasts.com/series/laravel-5-fundamentals/episodes/25
2. Resizing Images using timthumb in laravel (on the fly, you don't need to sotre new croped image on the host)
    - https://medium.com/@pramodpandey05/compress-image-using-timthumb-in-laravel-71d00e08376e
    - https://github.com/GabrielGil/TimThumb

# License 
this project is free to every one who is starting to learn Laravel
> Author : Eslam Ayman 