Blog with Admin panel

Before you start the project, go into the .env 
Change sqlite to your db
DB_CONNECTION=sqlite 
add a line 
DB_DATABASE=(your name db)

To add Posts, categories, tags and users
php artisan migrate --seed
If it does not work, then:
php artisan migrate:fresh --seed (Clears database and loads NEW data

Join to admin user
email: admin@example.com
password: 123

Join to default user
email: reader@example.com
password: 123


When registering a new account you will need to use the mailtrap site to verify and get a password. But before that in the project terminal write 
<b>php artisan queue:work</b>
so that the message with verification and password will be sent.

