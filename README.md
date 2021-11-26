# Local application setup
1. You have to run "composer install" in cli
2. Make a copy of ".env.example" and name it ".env"
3. Download Nodejs
4. Run "npm install" in cli
5. Run "npm run dev" in cli
6. Run the docker command: "docker run -p 3306:3306 --name connection_security_mysql -e MYSQL_ROOT_PASSWORD=secret -e MYSQL_DATABASE=connection_security -d mysql:latest --default-authentication-plugin=mysql_native_password"
7. Run "php artisan migrate --seed" in cli

E1. If you have an error "503 no service" try "php artisan up" in cli


# Open local database cli and interacting with the database
1. Open docker desktop
2. Find mysql container and open interactive cli
3. In CLI write "mysql -u root -p"
4. Write "secret" (Now you are connected to the database)
5. Write "show databases;"
6. Write "use [DATABASE];" or "create database [DATABASE];" (if you create a database, then use it afterwards)
7. Write "show tables;" 
8. From here on you can write "select * from [TABLE];"
