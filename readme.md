## Online Test Set Up

Please find following steps 

1) Install laravel 4.2  composer create-project laravel/laravel {your_project} 4.2 --prefer-dist (required composer) (place )

2) Open app/config/app.php and go cmd promt navigate to project folder and type 'php artisan key:generate' it will generate key in app.php

3) Open app/config/database.php  and provide mysql host, DBname, Username and password

4) Once all this extract the give file Online.zip ,  copy view,model,controller  from app 

5) Next step to set up Database, Create Db in Mysql 

6) Once create DB, Open cmd prompt or show and go to our project root folder and type 'php artisan migrate:install', it will create a migration table in our db after the you can start creaeting our own table 

7) Type 'php artisan migrate:make create_users_table'  Once you type this , it will create a php file in  'app/database/migrations/{ file_start_with_date_and_with_create_users_table.php}', Now you open given online.zip ang go to  'app/database/migrations/{file_start_with_date_and_with_create_users_table.php}' and copy the code and paste it yours  'app/database/migrations/{ file_start_with_date_and_with_create_users_table.php}' once copied open comment prompt and type 'php artisan migrate' it will create the table 

8) Once table create we need seed the table , php artisan mirgrate:make seed_users_table it will create app/database/migrations/{ file_start_with_date_and_with_seed_users_table_.php} copy and  paste the code from online app/database/migrations/{ file_start_with_date_and_with_seed_users_table_.php}

9)Creating table for create_password_reminders_table  Type 'php artisan migrate:make create_password_reminders_table'  Once you type this , it will create a php file in  'app/database/migrations/{ file_start_with_date_and_with_create_password_reminders_table.php}',  copy and  paste the code from online(given code)  'app/database/migrations/{file_start_with_date_and_with_create_password_reminders_table.php}' and copy the code and paste it yours  'app/database/migrations/{ file_start_with_date_and_with_create_password_reminders_table.php}' once copied open comment prompt and type 'php artisan migrate' it will create the table 


10)Creating table for create_contacts_table  Type 'php artisan migrate:make create_contacts_table'  Once you type this , it will create a php file in  'app/database/migrations/{ file_start_with_date_and_with_create_contacts_table.php}',  copy and  paste the code from online(given code) 'app/database/migrations/{file_start_with_date_and_with_create_contacts_table.php}' and copy the code and paste it yours  'app/database/migrations/{ file_start_with_date_and_with_create_contacts_table.php}' once copied open comment prompt and type 'php artisan migrate' it will create the table 


11) Thats all ,  http://localhost/online/public/login 

 username :: elahiabdul007@gmail.com
 password :demo












