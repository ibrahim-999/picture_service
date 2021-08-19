# picture_service

The client needs a website where registered and logged in users can upload pictures for acceptance or rejection. An administrator will login and review all submissions. Accepted pictures will be assigned a URL which can be accessed by all users (without login). Rejected pictures have their pictures removed but the metadata remains.

## How to use

-   Clone the repository with **git clone**
-   Copy **.env.example** file to **.env** and edit database credentials there
-   Run **composer install** **composer update** just in case
-   Run **php artisan key:generate**
-   Run **php artisan migrate**
-   Run **php artisan db:seed**
-   That is it.
-   You can login with the credentials __admin@mail.com__ - **admin123**

## Types of users

-   guest: this user can only view the photos that has been approved for viewing.
-   registered user: has guest user rights, plus can upload photos to the site.
-   reviewer: All rights of a registered user but with rights to review only
    items placed in his queue for approval.
-   admin: all rights of a reviewer, plus ability to assign task to others for review.
    Ability to override reviewer, ability to pull image from general view, ability to delete user account
