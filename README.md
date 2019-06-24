# laravel-taskHandler

Read Me: Laravel 5.8 first project

# Overview
This tutorial will teach you to create your first Laravel project. So, I am going to take a demo project that is TaskHandler in which we can add, update, list and remove the task.
If you are new to Laravel, please checkout my blog https://sbsharma.com/laravel

# Configuring the project
Let’s follow these steps given below:
1.	Before working with this project please make sure that you have git installed in your system.
2.	If you are working on Ubuntu or you have git Bash installed in your system then go to the directory where you want to install the project then run the following command: <br>
    <code>git clone https://github.com/SATPAL-BHARDWAJ/laravel</code>
3.	Otherwise, you can <code>cd</code> to the required directory and then run the above command.
4.	After cloning the project <br>
a.	Change .env.example to .env located in the root directory <br>
b.	If you are working on Windows you will get through the error when trying to rename the .env file because Windows never allow you to save the file without a name.<br>
c.	You can do this with a code editor, open your code editor create a file and paste the code from .env.example and then save it as .env by choosing to save type All Files.<br>
d.	Go to the phpMyAdmin and create a database <br>
e.	Now Configure the database <br>
    <code>DB_DATABASE=database_name </code><br>
   <code> DB_USERNAME=root or as your user_name </code><br>
    <code>DB_PASSWORD=password or leave empty if not </code><br>
5.	To create the vendor directory, run the following command:<br>
    <code>composer install</code>
6.	Generate the key by running the following command: <br>
    <code>php artisan key:generate</code>
7.	Next step is to migrate the database by running the following command<br>
    <code>php artisan migrate </code><br>
    <code>php artisan migrate –path=/database/migrations/task</code>
8.	After successfully migrate the database go to the browser and type the following URL<br>
    <code>localhost/path/to/project_name</code>
9.	And boom!! It’s ready

 
