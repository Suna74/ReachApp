Herramientas utlizadas

- CodeIgniter v4
- Xampp v3.3.0
- Mysql Workbench
- Cmder (consola)

1. Instalar Xampp v3.3.0 (https://www.apachefriends.org/es/index.html) de ser necesario y CodeIgniter v4 (https://www.codeigniter.com/download)

2. Descargar repositorio (link github)

3. Descomprimir la aplicacion en la carpeta de xampp/htdocs/ReachApp

4. Iniciar consola e ir al directorio de la aplicacion ReachApp

5. Escribir en consola en la raiz del proyectp los siguientes comandos uno por uno para generar la base de datos
  - php spark migrate
  - php spark db:seed Student
  - php spark db:seed Subject

6. Inicializar el proyecto con el comando en consola:
  - php spark serve

La base de datos puede ser visualizada y gestionada tanto desde PhpMyAdmin o Mysql Workbench pero no es necesario, las migraciones y seeders haran el trabajo de montar la base de datos.

URL: http://localhost:8080
