 
 API
 
 Install all the dependencies using composer

    composer install


Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env 

Generate a new application key

    php artisan key:generate
    
 Config your database in .env

     DB_DATABASE=mydatabase

Run the database migrations (Set the database connection in .env before migrating)

    php artisan migrate --seed  

Endpoints

    http://localhost:3000/api/peoples methods post delete get

    http://localhost:3000/api/municipalities methods get

    http://localhost:3000/api/professions get

 
