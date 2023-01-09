Al clonar el proyecto se debe editar el archivo .env.example (cambiarle el nombre a .env) y colocar una base de datos para probar y luego se deben correr los siguientes comandos en la consola luego de clonar el proyecto:

composer install
php artisan key:generate
npm install
npm run dev
php artisan migrate --seed

usuarios de prueba:

- Administrador: 
email: admin@gmail.com 
password: password

- Cliente:
email: user@gmail.com 
password: password