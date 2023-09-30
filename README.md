Hello, this is my Laravel boilerplate!

This boilerplate comes with 
- an integrated middleware that sets a proper cache header
- .htaccess that is configured to compress text and image files properly
- admin login and dashboard

Basically, everything that every page needs to get a good lighthouse score is already provided.

To run it:
- configure .env to your liking (eg. set database name, etc.)
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- php artisan serve
